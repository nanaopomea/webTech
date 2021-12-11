<?php

//do all tests in this class

use PHPUnit\Framework\TestCase;

class unit extends TestCase{

    
    /****
     * @test
     */
    public function testUsertLogin(){
        $response = $this->get("/");
        $response->assertStatus(200);   
    }
    
}






?>