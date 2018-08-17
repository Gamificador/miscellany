<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateMentions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mentions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all the mentions to the new url format.';

    /**
     * @var int
     */
    protected $count = 0;

    /**
     * @var string
     */
    protected $url = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $entities = [
            'App\Models\Campaign',
            'App\Models\Character',
            'App\Models\Calendar',
            'App\Models\DiceRoll',
            'App\Models\Event',
            'App\Models\Family',
            'App\Models\Item',
            'App\Models\Journal',
            'App\Models\Location',
            'App\Models\Note',
            'App\Models\Organisation',
            'App\Models\Quest',
            'App\Models\Section',
        ];

        $this->url = rtrim(getenv('APP_URL'), '/');

        foreach ($entities as $entity) {
            $model = new $entity;
            $model->with('campaign')->chunk(200, function ($models) use ($entity) {
                foreach ($models as $model) {
                    $attributes = $model->getAttributes();
                    $campaignId = $model->campaign_id;
                    $updated = false;
                    /** @var $model \App\Models\Character */

                    $fields = ['history', 'description', 'entry'];
                    foreach ($fields as $field) {
                        if (array_has($attributes, $field)) {
                            // Does it have an old link?
                            if (strpos($model->$field, 'data-toggle="tooltip"') !== false) {
                                if (strpos($model->$field, '/campaign/' . $campaignId) === false) {
                                    // Fix the link. If the entity is a campaign, use the proper call
                                    if ($entity == 'App\Models\Campaign') {
                                        $model->$field = preg_replace("`" . $this->url . '\/(.*?)\/(.*?)`i', $this->url . "/$1/" . $model->getMiddlewareLink() . "/$2", $model->$field);
                                    } else {
                                        $model->$field = preg_replace("`" . $this->url . '\/(.*?)\/(.*?)`i', $this->url . "/$1/" . $model->campaign->getMiddlewareLink() . "/$2", $model->$field);
                                    }
                                    $updated = true;
                                }
                            }
                        }
                    }

                    if ($updated) {
                        $this->count++;
                        $model->save();
                    }
                }
            });
        }




        $this->info("Updated {$this->count} entities.");

        return true;
    }
}