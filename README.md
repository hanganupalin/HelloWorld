[![PlentyDevToolLogo](https://cdnmp.plentymarkets.com/8501/meta/images/icon_plugin_xs.png)](https://angular.io/)

# plentyDevTool

## Logging

#### Write Logs

* Main process:
  
    import * as log from 'electron-log';
  
    log.info('Hello World', value1, value2, ...);

* Angular App:
  
    LogService.info('Hello World', value1, value2, ...);

#### Loglevel

1. error (self explaining)
2. warn (self explaining)
3. info (information you want to see every time. Example: JobQueue is empty)
4. debug (information you **DONT** want to see every time. Example: Writing a key to the localstorage)

#### Read Logs

Logs will be displayed in the terminal and in the DevTools (DevTools do not include some entries from the start of the application).

Logs will also be written to the following files:

* **on Linux:** `~/.config/<app name>/log.log`
* **on macOS:** `~/Library/Logs/<app name>/log.log`
* **on Windows:** `%USERPROFILE%\AppData\Roaming\<app name>\log.log`

## Release new Version

You need valid credentials in `~/.aws/credentials` to write to S3.

1. Make sure you are on Branch "master" and have no uncommitted changes.
2. Run `npm run release:major`, `npm run release:minor` or `npm run release:patch`. This creates a new release and publishes it.

## Install aws-cli

If you are using the local machine instead of a live system you must have installed the aws-cli:

    sudo apt install python-pip
    sudo pip install awscli

Run `aws --version` to check if it works. It should display something like:

    aws-cli/1.16.100...

## Installation

1. Check out
2. npm i
3. Start application: `npm start`

## Configuration

1. Log in
2. Select local folder for synchronisation
3. Select plugins for synchronisation

## Requirements for auto deploy

- Turn on auto deploy by activating the toggle in the plugin overview
- The plugin must have been built successfully at least once before it can be deployed automatically

## Included commands

| Command                    | Description                                                                                                 |
| -------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `npm run ng:serve:web`     | Execute the app in the browser                                                                              |
| `npm run build`            | Build the app. Your built files are in the /dist folder.                                                    |
| `npm run build:prod`       | Build the app with Angular aot. Your built files are in the /dist folder.                                   |
| `npm run electron:local`   | Builds your application and start electron                                                                  |
| `npm run electron:linux`   | Builds your application and creates an app consumable on linux system                                       |
| `npm run electron:windows` | On a Windows OS, builds your application and creates an app consumable in windows 32/64 bit systems         |
| `npm run electron:mac`     | On a MAC OS, builds your application and generates a `.app` file of your application that can be run on Mac |

**Your application is optimised. Only /dist folder and node dependencies are included in the executable.**

## Signing for Windows app on Mac/Linux using JSign

1. Make sure youve got Java installed by running `java`

2. The JSign-Package is in top-level of this Repo, to use it asap
   
   * there could be problems if you are not using MacOs Mojave, in this case try this [one](https://github.com/ebourg/jsign/releases/download/2.1/jsign-2.1.jar)

3. Just put the the hardware token into your machine. Install token driver for Mac (`.build/cert/mojave signing driver/mac_10.2.82.0.zip`).

4. Have a look at the eToken.cfg file
   
   ```
   name = "eToken"
   library = /Library/Frameworks/eToken.framework/Versions/A/libeToken.dylib
   ```

5. Check the library link to make sure you have the correct PKCS module. This link might be different per token. On Linux you will find it in ``/lib``, while on Mac you can find it in ``/Library/Frameworks`` or ``/usr/local/lib``.

6. You can have a look at `sign.js` to see, what happens.

## You want to use a specific lib (like rxjs) in electron main thread ?

You can do this! Just by importing your library in npm dependencies (not devDependencies) with `npm install --save`. It will be loaded by electron during build phase and added to the final package. Then use your library by importing it in `main.ts` file. Easy no ?

## Browser mode

Maybe you want to execute the application in the browser with hot reload ? You can do it with `npm run ng:serve:web`.
Note that you can't use Electron or NodeJS native libraries in this case. Please check `providers/electron.service.ts` to watch how conditional import of electron/Native libraries is done.
