<?php

namespace App\Asmvc\Core\Cli\Commands;

use App\Asmvc\Core\Cli\Cli;

class CreateModel extends Cli
{
    /**
     * @var string $command
     * @var string $hint
     * @var string $desc
     */
    protected $command = "create:model";
    protected $hint = "model";
    protected $desc = "Create a Model";

    /**
     * Register the command
     */
    public function register()
    {
        $try = $this->next_arguments(1);
        if ($try) {
            $env = provider_config()['model'];
            if ($env == 'eloquent') {
                $data = <<<data
                        <?php

                        namespace App\Asmvc\Models;

                        use App\Asmvc\Core\Eloquent\Eloquent;
                        
                        class {$try} extends Eloquent 
                        {
                            protected string \$table = '';
                        }

                        data;
            } else {
                $data = <<<data
                        <?php
    
                        namespace App\Asmvc\Models;
    
                        use App\Asmvc\Core\Database\Model;
    
                        class {$try} extends Model
                        {
                            protected string \$table = '';
                        }
    
                        data;
            }
            file_put_contents(base_path() . "App/Models/{$try}.php", $data);
            echo "Model Created: {$try}.php\n";
        }
    }
}
