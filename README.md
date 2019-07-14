# Project Holidaze-2019
### 
```
If you do not have vue installed globaly on your computer you need to do so.
```
## NOTE
```
This vue required you to run a localhost on your desktop/laptop! Use programs like XAMPP to make the PHP files to work.
Make sure the client and server folders are in the hotel-booking as the different forms are connected to the address http://192.168.64.2/hotel-booking/
You can also change this to your liking.
If so you need to change the addresses in three files:

In client/src/components:
AddEstablishment.vue on line 10
ContactForm.vue on line 9

In client/src/containers/pages:
HotelSpecificPage.vue on line 73

```
## Project setup
```
npm install
```
##Install SCSS
````
npm install sass-loader node-sass webpack --save-dev
````
##Install Bootstrap Vue
````
npm i vue bootstrap-vue bootstrap
In your main.js file add
import 'bootstrap/dist/css/bootstrap.min.css'; if its not already there
````
### Vue Router
````
npm install --save vue-router
````

###  Webpack Manager
```
$ npm install --save-dev npm-install-webpack-plugin
In your webpack.config.js:

```
### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
Navigate to App running at:
  - Local:   http://localhost:8080/
  - Network: http://172.27.100.165:8080/
```

### Compiles and minifies for production
```
npm run build
```

### Run your tests
```
npm run test
```

### Lints and fixes files
```
npm run lint
```
### 
```

```
### Loggin Information
```
Login for admin page:
Username: admin
Password: password
```
### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).
