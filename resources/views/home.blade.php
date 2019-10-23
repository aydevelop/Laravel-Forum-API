<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
    <div id="app">
        <v-app>
            <v-vontainer>
                    <v-row align="center">
                      <v-col class="text-center" cols="12" sm="4">
                        <div class="my-2">
                          <v-btn small>Normal</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn small color="primary">Primary</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn small color="error">Error</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn small disabled>Disabled</v-btn>
                        </div>
                      </v-col>
                      <v-col class="text-center" cols="12" sm="4">
                        <div class="my-2">
                          <v-btn>Normal</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn color="primary">Primary</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn color="error">Error</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn disabled>Disabled</v-btn>
                        </div>
                      </v-col>
                      <v-col class="text-center" cols="12" sm="4">
                        <div class="my-2">
                          <v-btn large>Normal</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn large color="primary">Primary</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn large color="error">Error</v-btn>
                        </div>
                        <div class="my-2">
                          <v-btn large disabled>Disabled</v-btn>
                        </div>
                      </v-col>
                    </v-row>
            </v-vontainer>
        </v-app>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>