@extends('layouts.forex')

@section('content')
  
  <div class="container-fluid px-0">

    <!-- CAROUSEL -->
    <div id="demo" class="carousel kb_elastic slide kb_wrapper" data-ride="carousel">

      <!-- The Slideshow -->
      <div class="carousel-inner caroz" role="listbox" style=" width:100%; height: 600px;">

        <div class="carousel-item item caro active">
          <img src="{{asset('assets/img/wallforex2.jpg')}}" style="width:130%; height: 600px;" alt="Image6">
          <div class="carousel-caption col-sm-8 caroin">
            
          </div>
        </div>

        <div class="carousel-item item caro">
          <img src="{{asset('assets/img/header.jpg')}}" style="width:130%; height: 600px;" alt="Image3">
          <div class="carousel-caption col-sm-8 caroin">
            
          </div>
        </div>

        <div class="carousel-item item caro">
          <img src="{{asset('assets/img/wallstreet.jpg')}}" style="width:130%; height: 600px;" alt="Image7">
          <div class="carousel-caption col-sm-8 caroin">
            
          </div>
        </div>

      </div>
      <!-- End Of Slideshow -->

    </div>

      <!-- Left and Right Controls -->
      <a href="#demo" class="carousel-control-prev icon" data-slide="prev">
        <i class="fa fa-5x" style="opacity: .05;">&#8249;</i>
      </a>
      <a href="#demo" class="carousel-control-next icon" data-slide="next">
        <i class="fa fa-5x" style="opacity: .05;">&#8250;</i>
      </a>

    <!-- END OF CAROUSEL -->

    <!-- TradingView Widget BEGIN -->
    <div class="col-sm-12 px-0" style="width: 100%;">

      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
        "symbols": [
            {
            "proName": "OANDA:SPX500USD",
            "title": "S&P 500"
            },
            {
            "proName": "OANDA:NAS100USD",
            "title": "Nasdaq 100"
            },
            {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
            },
            {
            "proName": "BITSTAMP:BTCUSD",
            "title": "BTC/USD"
            },
            {
            "proName": "BITSTAMP:ETHUSD",
            "title": "ETH/USD"
            }
        ],
        "colorTheme": "dark",
        "isTransparent": false,
        "displayMode": "adaptive",
        "locale": "en"
        }
        </script>
      </div>

    </div>
    <!-- TradingView Widget END -->



    <!-- AAPL -->
    <div class="col-sm-12 row mb-4 px-0" style="width: 100%; height: 630px;"> 

      <div class="col-sm-9" style="border: 2px solid red">
        <!-- TradingView Widget BEGIN -->
        <div class="col-sm-12 px-0 tradingview-widget-container" style="border: 2px solid green">
            <div id="tradingview_26804 px-0"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
            new TradingView.widget(
            {
            "width": 900,
            "height": 610,
            "symbol": "NASDAQ:AAPL",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "light",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "container_id": "tradingview_26804"
            }
            );
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>

      <div class="col-sm-3 px-0">
          
        <div class="col-sm-12">
          <!-- TradingView Widget BEGIN -->
          <div class="col-sm-12 px-0 tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
            {
            "interval": "1m",
            "width": 298,
            "isTransparent": false,
            "height": 300,
            "symbol": "NASDAQ:AAPL",
            "showIntervalTabs": true,
            "locale": "en",
            "colorTheme": "light"
          }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>

        <div class="col-sm-12 mx-0">

          <div id="stocktwits-widget-news">

          </div><a href='https://stocktwits.com' style='font-size: 0px;'>Stocktwits</a>
            <script type="text/javascript" src="https://api.stocktwits.com/addon/widget/2/widget-loader.min.js"></script>
            <script type="text/javascript">
            STWT.Widget({container: 'stocktwits-widget-news', symbol: 'AAPL', width: '298', height: '310', limit: '15', scrollbars: 'true', streaming: 'true', title: 'StockTwits For AAPL', style: {link_color: '4871a8', link_hover_color: '4871a8', header_text_color: '000000', border_color: 'cecece', divider_color: 'cecece', divider_color: 'cecece', divider_type: 'solid', box_color: 'f5f5f5', stream_color: 'ffffff', text_color: '000000', time_color: '999999'}});
            </script>

        </div>

      </div>

  </div>
  <!-- AAPL END -->

  <!-- WELCOME -->
  <div class="container-fluid three p-2 my-5 text-center">
    <h2 class="wow heartBeat text-center display-6 mb-3 mt-5" data-wow-duration="1s" data-wow-delay=".2s">WHY CHOOSE US?</h2>
    <div class="col mx-auto px-5 my-3">
      <p class="col wow bounceIn text-center text-dark mx-5 px-5 lead" data-wow-duration="3s" data-wow-delay="1s">Forex Empire is a non-custodial instant cryptocurrency exchange company Located at 108 Lumb Lane, Bradford, United Kingdom, BD8 7RS, with branch in argentina. Forex Empire acts as an intermediary between crypto exchanges and users who wish to make profit through active investment, offering access to 140+ cryptocurrencies.</p>
    </div>
  </div>
  <!-- END OF WELCOME -->
  
  <!-- TESTIMONIAL -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-center m-auto">
        <h4 class="display-5 text-center test-head">Customer Reviews</h4>
        <div id="myCarousel" class="carousel carozel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators carozel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="img-box"><img class="img-fluid" src="{{asset('assets/img/passport3.jpg')}}" alt=""></div>
              <p class="testimonial lead text-dark">
                I am lawrel by name, Iam an active investor with forexempire and I can tell you they are the best, I get my profit after every 15hours after investment. They are reliable in every way. When i got introduced i never knew it would be this way better everyday. thanks to the admin.
              </p>
              <p class="overview"><b class="text-dark">Hilton lawrel</b>, Media Analyst</p>
            </div>
            <div class="item carousel-item">
              <div class="img-box"><img class="img-fluid" src="{{asset('assets/img/passport2.jpg')}}" alt=""></div>
              <p class="testimonial lead text-dark">
                I am from westminster england. I am happy to be a part of this movement.Investing under forexempire has been the best move i made in years and now i earn more with forexempire than i earn in my work place. i encourage you to give it a try.
              </p>
              <p class="overview"><b class="text-dark">Vera hamilton</b>, Seo Analyst</p>
            </div>
            <div class="item carousel-item">
              <div class="img-box"><img class="img-fluid" src="{{asset('assets/img/passport1.jpg')}}" alt=""></div>
              <p class="testimonial lead text-dark">
              Hello there, this is Danny mak. I am a member of this great platform and i can tell you that they have earned my trust through consistent payout, in all England I am yet to meet a reliable investor like forexempire.
              </p>
              <p class="overview"><b class="text-dark">Danny mak</b>, Web Developer</p>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control carozel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa">&#8249;</i>
          </a>
          <a class="carousel-control carozel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa">&#8250;</i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF TESTIMONIAL -->

    <!-- REGISTER -->
    <div class="wow tada col-sm-12 text-center my-5" data-wow-duration="2s" data-wow-delay="10s">
    <button type="button" class="btn btn-info rounded-pill px-2 my-5">
      <p class="lead pt-2 px-3">Register To Join Us Now</p>
    </button>
  </div>
  <!-- END OF REGISTER -->


  <!-- CERTIFICATION -->
  <div class="container-fluid background mb-5" style="border: .5px solid transparent; border-bottom: none;">
    <h3 class="display-5 text-center text-light text-uppercase test-head mt-5 mb-4">Certifications & Awards</h3>

    <div class="row mb-2 bg-gradient-success text-white mt-5">

      <div class="col-sm-9 p-4">

        <div class="col-sm-12 mb-3">
          <h5 class="display-5 text-left text-uppercase text-danger pt-2 px-3">Our Outreach</h5>
          <p class="lead block-quote pt-2 px-3">Forex Empire is a non-custodial instant cryptocurrency exchange company, headquartered in Bradford U.k with branch in Portugal with dealings on bitcoin investment. Whether you’re in the business of trading stocks, forex, or commodities, then you’ll be used to looking at charts. The world of cryptocurrency is no different from any other kind of trade.</p>
        </div>

        <div class="col-sm-12 text-center mt-4 py-4">
          <h5 class="display-5 text-center text-uppercase text-danger pt-2">Want to know more?</h5>
          <p class="lead text-center pt-2 px-3">Download Our Company Certificate</p>
        
          <a href="../assets/img/certification.pdf" class="pt-2">
            <img class="px-0 mx-0 bg-light" src="{{asset('assets/img/rules.png')}}" style="width: 20%; height: 20%;" alt="certificate">
          </a>

        </div>

      </div>

      <div class="col-sm-3 p-4 rounded" style="border: 1px solid rgb(54, 45, 99)">
        <h5 class="display-5 text-center text-uppercase mb-4 bg-secondary p-2">London Traders Association</h5>

        <div class="col py-3 scroll-div">
          <ul class="px-0" style="border: 2px solid grey">
            <li>
              <h5 class="display-5 text-danger">Nature of business (SIC)</h5>
              <p class="lead">96090 - Other service activities not elsewhere classified</p>
              <div class="clear"></div>
            </li>
          
            <li>
              <h5 class="display-5 text-success">U.K Registered office address </h5>
              <p class="lead">108 Lumb Lane, Bradford, United Kingdom, BD8 7RS</p>
              <div class="clear"></div>
            </li>

            <li>
              <h5 class="display-5 text-danger">Incorporated on</h5>
              <p class="lead">12 June 2017</p> 
          </li>
          </ul>
        </div>

        <div class="col-sm-12 banner p-4 text-center">
          <div class="col-sm-10 mx-auto p-1 bg-light rounded" style="border: 2px solid grey">
            <img class="mx-auto" src="{{asset('assets/img/LTA.jpg')}}" style="width: 100%; height: 100%;" alt="banner">
            <button type="button" class="btn btn-info rounded mx-2 mt-2 mb-0">
              VERIFIFICATION
            </button>
          </div>
        </div>

      </div>

      <!-- Awards -->
      <div class="col-sm-12 py-4 mt-4 text-center awards">
        <h5 class="display-5 text-center text-uppercase text-danger pt-2 mb-5 test-head">Awards</h5>
        <img class="img-fluid mx-auto" src="{{asset('assets/img/award.svg')}}" title="awards" style="width: 80%; height: 80%" alt="awards">
      </div>

    </div>

  </div>
  <!-- END OF CERTIFICATION -->

  <!-- PRICES -->
  <h4 class="display-5 text-center test-head pt-5">Our Offers</h4>
  <div class="row mx-5 mt-5 py-5">
    
    <div class="wow fadeInLeft col-sm-4" data-wow-duration="1s" data-wow-delay=".3s">
      <div class="card">
        <div class="card-header bg-dark text-light text-center border price-head">
          <h5 class="card-title">Forex Starter Plan</h5>
        </div>
        <div class="card-body text-center">
          <div class="jumbotron bg-info text-light p-1">
            <h1 class="display-3">10%+</h1>
            <p class="lead">After 15 HOURS</p>
          </div>
          <p class="card-text lead">	&#10004; Max $1500</p>
          <p class="card-text lead">	&#10004; Min $20</p>
          <p class="card-text lead">	&#10004; Referal 5%</p>
          <a href="#" class="btn btn-danger text-dark" style="border: .5px solid #994039">
            <h6 class="display-5 mb-1">
              Register
            </h6>
          </a>
        </div>
      </div>
    </div>

    <div class="wow pulse col-sm-4" data-wow-duration="1s" data-wow-delay=".3s">
      <div class="card">
        <div class="card-header bg-warning text-dark text-center border price-head">
          <h5 class="card-title">Forex Medium Plan</h5>
        </div>
        <div class="card-body text-center">
          <div class="jumbotron bg-secondary text-light p-1">
            <h1 class="display-3">15%+</h1>
            <p class="lead">After 15 HOURS</p>
          </div>
          <p class="card-text lead">	&#10004; Max $5000</p>
          <p class="card-text lead">	&#10004; Min $500</p>
          <p class="card-text lead">	&#10004; Referal 8%</p>
          <a href="#" class="btn btn-danger text-dark" style="border: .5px solid #994039">
            <h6 class="display-5 mb-1">
              Register
            </h6>
          </a>
        </div>
      </div>
    </div>

    <div class="wow fadeInRight col-sm-4" data-wow-duration="1s" data-wow-delay=".3s">
      <div class="card">
        <div class="card-header bg-secondary text-light text-center border price-head">
          <h5 class="card-title">Forex Extended Plan</h5>
        </div>
        <div class="card-body text-center">
          <div class="jumbotron bg-primary text-dark p-1">
            <h1 class="display-3">20%+</h1>
            <p class="lead">After 15 HOURS</p>
          </div>
          <p class="card-text lead">	&#10004; Max $50000</p>
          <p class="card-text lead">	&#10004; Min $2000</p>
          <p class="card-text lead">	&#10004; Referal 12%</p>
          <a href="#" class="btn btn-danger text-dark" style="border: .5px solid #994039">
            <h6 class="display-5 mb-1">
              Register
            </h6>
          </a>
        </div>
      </div>
    </div>
    
  </div>

  <!-- END OF PRICES -->
  
  <!-- BRANCHES & LOCATION -->
  <div class="col-sm-12 branch p-4 mt-4 py-5">
    <h3 class="display-5 text-center text-light text-uppercase test-head my-4">Branches & Locations</h3>
    <div class="row p-5 my-3">

      <div class="col-sm-6 team">
      </div>

      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-6">
            <div class="col-sm-12">
              <h5 class="display-6 text-danger">Recognition</h5>
              <p class="lead text-light small">Our trading metrics are recognized by some of the most respected experts in the industry.</p>
            </div>
            <div class="col-sm-12">
              <h5 class="display-6 text-danger">Trading Tools</h5>
              <p class="lead text-light small">We provide you with numerous tools to help you better understand all the trading options we offer.</p>
            </div>
            <div class="col-sm-12">
              <h5 class="display-6 text-danger">Updates</h5>
              <p class="lead text-light small">Get support and inspiration from real-life traders and enjoy the benefits of copy trading.</p>
            </div>
          </div>

          <div class="col-sm-6">
          <div class="col-sm-12">
              <h5 class="display-6 text-danger">Confidence</h5>
              <p class="lead text-light small">Enter the stock markets with a broker you can trust.</p>
            </div>
            <div class="col-sm-12">
              <h5 class="display-6 text-danger">Exceptional Trading</h5>
              <p class="lead text-light small">Industry standard trading conditions for every type of trader.</p>
            </div>
            <div class="col-sm-12">
              <h5 class="display-6 text-danger">Session Map</h5>
              <p class="lead text-light small">Gives the trader a quick market overview through the world’s key marketsand their time zones.</p>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>

  <!-- END OF BRANCHES & LOCATION -->

  <!-- PARTNERS -->
  <div class="col-sm-12 text-center partners p-4">
    <h3 class="display-5 text-center text-light text-uppercase test-head mb-2">Partners</h3>
    <img class="mx-auto mt-5 mb-3" src="{{asset('assets/img/media-logos.png')}}" style="width: 80%; height: 80%;" alt="partners">
  </div>
  <!-- END OF PARTNERS -->

</div>

@endsection

