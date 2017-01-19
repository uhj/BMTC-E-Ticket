<html>
<link rel="stylesheet" href="src/creditly.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="src/creditly.js"></script>
<script type="text/javascript">
    $(function() {
      var creditly = Creditly.initialize(
          '.creditly-wrapper .expiration-month-and-year',
          '.creditly-wrapper .credit-card-number',
          '.creditly-wrapper .security-code',
          '.creditly-wrapper .card-type');

      $(".creditly-card-form .submit").click(function(e) {
        e.preventDefault();
        var output = creditly.validate();
        if (output) {
          // Your validated credit card output
          console.log(output);
        }
      });
    });
  </script>
  <style>
    .button{
        background-color:lightgreen;
        padding:10px;
        padding-right:20px;
        padding-left:20px;
    }
  </style>
<title>Namma BMTC</title>
</html>
<body>
<div class="banner" style="margin-top:150px;">
<div class="row">
<div class="header">
</div>
<form class="creditly-card-form" method="POST" action="/transaction">
{{csrf_field()}}
<section class="creditly-wrapper">
<div class="credit-card-wrapper">
<div class="first-row form-group">
<div class="col-sm-8 controls">
<label class="control-label">Card Number</label>
<input class="number credit-card-number form-control"
                  type="text" name="number" required 
                  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
</div>
<div class="col-sm-4 controls">
<label class="control-label">CVV</label>
<input class="security-code form-control"
                  inputmode="numeric" required 
                  type="text" name="security-code"
                  placeholder="&#149;&#149;&#149;">
</div>
</div>
<input type="hidden" value={{$amount}} name="amount">
<div class="second-row form-group">
<div class="col-sm-8 controls">
<label class="control-label">Name on Card</label>
<input class="billing-address-name form-control"
                  type="text" name="name" required 
                  placeholder="John Smith">
</div>
<div class="col-sm-4 controls">
<label class="control-label">Expiration</label>
<input class="expiration-month-and-year form-control" required
 
                  type="text" name="expiration-month-and-year"
                  placeholder="MM / YY">
</div>
</div>
<div class="card-type"></div>
</div>
</section>
<input type="submit" class="button" value="Submit">
</form>
</div> 
<div class="footer"> Powered by <a href="http://www.mybmtc.com" target="_blank" rel="nofollow">BMTC</a> </div>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
