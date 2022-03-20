<?php

use laraMar\Laramar\Models\MyCustom;

it('it can create my custom model',function(){
   $my_custom = MyCustom::factory()->create(['name'=>'customer']);
   $this->assertModelExists($my_custom);
});
