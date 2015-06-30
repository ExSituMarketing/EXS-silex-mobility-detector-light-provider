# EXS-silex-mobility-detector-light-provider
Simple regex methods used to determine if the useragent comes from a mobile, tablet or desktop device.

## Installing the MobilityDetectorLightProvider in a Silex project
The installation process is actually very simple.  Set up a Silex project with Composer.

Once the new project is set up, open the composer.json file and add the exs/silex-mobility-detector-light-provider as a dependency:
``` js
//composer.json
//...
"require": {
        //other bundles
        "exs/silex-mobility-detector-light-provider": "1.0.*@dev" 
```
Or you could just add it via the command line:
```
$ composer.phar require exs/silex-mobility-detector-light-provider: v1.0.*
```

Save the file and have composer update the project via the command line:
``` shell
php composer.phar update
```
Composer will now update all dependencies and you should see our bundle in the list:
``` shell
  - Installing exs/silex-mobility-detector-light-provider (dev-master 463eb20)
    Cloning 463eb2081e7205e7556f6f65224c6ba9631e070a
```

Update the app.php to include our provider:
``` php
//app.php
//...
$app->register(new \EXS\MobilityDetectorLightProvider\Providers\MobilityDetectorLightProvider());
```

MobilityDetectorLightProvider is ready to use, inject the service where you need it.
``` php
$container['exs.serv.mobility.detector.light'];
```





#### Contributing ####
Anyone and everyone is welcome to contribute.

If you have any questions or suggestions please [let us know][1].

[1]: http://www.ex-situ.com/