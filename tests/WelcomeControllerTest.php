<?php

class WelcomeControllerTest extends TestCase {

    /**
     * WelcomeControllerIndex
     *
     * @return void
     */
    public function WelcomeControllerIndex()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
    }

}
