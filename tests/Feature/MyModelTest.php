<?php

use laraMar\Laramar\Models\MyModel;

it('can create a model',function(){
    $my_model = MyModel::factory()->create();

    $this->assertModelExists($my_model);
    //dd($my_model);
});

it('can return the upper case value of the name',function(){
    $my_model = MyModel::factory()->create(['name'=>'marwen']);
    $name = $my_model->getUppercaseName();
    expect($name)->toEqual('Marwen');
});
