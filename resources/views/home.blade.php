<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>HIV PATIENTS MANAGEMENT SYSTEM</title>

    </head>
     <body>
         <div id="app">
           <v-app>
              <app-home></app-home>
           </v-app>
         </div>
          <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
