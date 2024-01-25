<?php

it("renders a home page",function(){
    $this->get('/')->assertStatus(200);
});
