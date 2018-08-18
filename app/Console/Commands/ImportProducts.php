<?php

namespace App\Console\Commands;

use App\Http\Requests\ProductRequest;
use Illuminate\Console\Command;
use App\Models\Product;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Importproducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $files = scandir(public_path().'/../resources/assets/imports/');
        foreach($files as $filex) {
            if ($file = fopen(public_path().'/../resources/assets/imports/'.$filex,"r")) {
                while(!feof($file)) {
                    $line = fgets($file);
                    $result = explode(",", $line);
                    if($line){
                        $product = new Product;
                        if(sizeof($result)>=1)
                        $product->name = $result[0];
    
                        if(sizeof($result)>=2)
                        $product->description = $result[1];
                        
                        if(sizeof($result)>=3)
                        $product->price = $result[2];

                        if(sizeof($result)>=4)
                        $product->category = $result[3];
                        $product->save();
                    }
                    # do same stuff with the $line
                }
                fclose($file);
            }
        }
        //
    }
}
