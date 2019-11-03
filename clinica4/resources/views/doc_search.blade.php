<!-- <html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{  asset('/assets/css/main.css')}}" rel="stylesheet" />
  </head> -->
  @include('include/header')
  <body>

    <div class="s131">
      <form>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="Search by Doctor" / style="height: 80px;">
          </div>
          <div class="input-field second-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices-single-default" id="sepciality-based">
                <option placeholder="">SPECIALIZATION</option>
                <option>Subject A</option>
                <option>Subject B</option>
                <option>Subject C</option>
              </select>
            </div>
          </div>
           <div class="input-field second-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul" id="city-based">
                <option placeholder="">CITY</option>
                <option>Subject A</option>
                <option>Subject B</option>
                <option>Subject C</option>
              </select>
            </div>
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="button" style="height: 80px;">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
    <script src="{{  asset('/assets/js/extention/choices.js')}}"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false
      });

    </script>
    @include('include/footer')
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
