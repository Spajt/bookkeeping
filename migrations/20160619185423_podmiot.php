<?php

use Phinx\Migration\AbstractMigration;

class Podmiot extends AbstractMigration
{
    
    public function change()
    {
        if (!$this->hasTable('podmioty')) {
            $this->table('podmioty')
                    ->addColumn('name', 'string')
                    ->addColumn('short_name', 'string')
                    ->addColumn('label', 'string')
                    ->addColumn('nip', 'string')
                    ->addColumn('regon', 'string')
                    ->addColumn('email', 'string')               
                    ->addColumn('webpage', 'string')               
                    ->addColumn('created_at', 'timestamp', array('default' => 'CURRENT_TIMESTAMP'))
                    ->save();
        }
    }
}
