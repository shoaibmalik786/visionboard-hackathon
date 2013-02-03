var hello = require('derby').createApp(module)
  , view = hello.view
  , get = hello.get;

// Templates define both HTML and model <- -> view bindings
view.make('Body'
, 'Holler: <input value="{message}"><h1>{message}</h1>'
);

// Routes render on client as well as server
get('/', function (page, model) {
  // Subscribe specifies the data to sync
  model.subscribe('message', function () {
    page.render();
  });
});
