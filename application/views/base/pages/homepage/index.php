 
 <?php 
  if( !$this->session->userdata('validated') == TRUE )
  {
    redirect('logged-in');
  }
  ?>
  <div class="bg-img">
  <div class="container-fluid">
    <div class="row mainSection">
      <div class="col-md-6 col-12 welcome customWelcome">
          <h3>Welcome! <?php echo $this->session->userdata('firstname'); ?></h3>
        <h6>WELCOME TO BYFAITH CHURCH</h6>
        <h1>Oh Safe To The Rock That Is Higher Than I</h1>
        <p>
          Far far away behind the word mountains, far from the countries
          Vokalia and Consonantia, there live the blind texts.
        </p>
        <button class="btn gotoBtn">Go To Sermons</button>
      </div>
      <div
        class="col-md-6 col-12 video">
        <div class="embed-responsive embed-responsive-16by9 ">
          <iframe
            class="embed-responsive-item videoleft"
            src="https://www.youtube.com/embed/watch?v=BHACKCNDMW8"
            ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section aboutSection">
  <div class="container">
    <div class="row justify-content-between aboutRow">
      <div class="col-md-5 col-12 mt-5 aboutContent">
        <h6>About Us</h6>
        <h2>Living and Sharping The Gospel</h2>
        <p class="text-muted mt-2 aboutPara">
          Far far away behind the word mountains, far from the countries
          Vokalia and Consonantia, there live the blind texts. Separate they
          live in Bookmarksgrove right at the coast of the Semantics, a
          large language ocean.
        </p>
        <p class="text-muted mt-2 aboutPara">
          A small river named Duden flows by their place and supplies it
          with the necessary regelialia.
        </p>
        <button class="btn aboutBtn mt-3">Know More About Us</button>
      </div>
      <div class="col-md-7 col-12 aboutImg">
        <img src="assets/img/book.jpg" alt="" />
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row mb-4 text-center">
          <div class="col-lg-12">
            <h6 class="subheading">SERMONS</h6>
            <h2 class="heading">Recent Sermons</h2>
          </div>
        </div>
        <div class="row cardRow">
          <div class="card-deck">
            <div class="card border-0">
              <img
                class="card-img-top"
                src="assets/img/01.jpg"
                alt="Card image cap"
                />
              <div class="card-body">
                <p class="card-text">
                  <small class="text-muted"
                    >15 JAN 2020 &middot;<span>
                  By Paster Campbell</span
                    ></small
                    >
                </p>
                <h5 class="card-title">Living and Sharping The Gospel</h5>
                <p class="card-text text-muted mb-5">
                  This is a longer card with supporting text below as a
                  natural lead-in to additional content.
                </p>
                <button class="btn readMoreBtn">Read More</button>
              </div>
            </div>
            <div class="card border-0">
              <img
                class="card-img-top"
                src="assets/img/02.jpg"
                alt="Card image cap"
                />
              <div class="card-body">
                <p class="card-text">
                  <small class="text-muted"
                    >15 JAN 2020 &middot;<span>
                  By Paster Campbell</span
                    ></small
                    >
                </p>
                <h5 class="card-title">Living and Sharping The Gospel</h5>
                <p class="card-text text-muted mb-5">
                  This is a wider card has supporting text below as a
                  natural lead-in to additional content.
                </p>
                <button class="btn readMoreBtn">Read More</button>
              </div>
            </div>
            <div class="card border-0">
              <img
                class="card-img-top"
                src="assets/img/03.jpg"
                alt="Card image cap"
                />
              <div class="card-body">
                <p class="card-text">
                  <small class="text-muted"
                    >15 JAN 2020 &middot;<span>
                  By Paster Campbell</span
                    ></small
                    >
                </p>
                <h5 class="card-title">Living and Sharping The Gospel</h5>
                <p class="card-text text-muted mb-5">
                  This is a wider card with supporting text below as a
                  natural lead-in to additional content.
                </p>
                <button class="btn readMoreBtn">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section bg-section">
  <div class="container">
    <div class="row mb-4 justify-content-between align-items-center">
      <div class="col-md-5 col-12">
        <h6 class="subheading mb-3">Why Us</h6>
        <h2 class="whyHeading mb-5">
          You matter to God, You matter to Us.
        </h2>
        <!-- 21:9 aspect ratio -->
        <!-- <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=BHACKCNDMW8"></iframe>
          </div> -->
      </div>
      <div class="col-md-5 align-self-end text-white">
        <p>
          Far far away, behind the word mountains, far from the countries
          Vokalia and Consonantia, there live the blind texts. Separated
          they live in Bookmarksgrove right at the coast of the Semantics, a
          large language ocean.
        </p>
      </div>
    </div>
    <div class="row align-item-center">
      <div class="col-md-5">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe
            class="embed-responsive-item"
            src="https://www.youtube.com/embed/watch?v=BHACKCNDMW8"
            ></iframe>
        </div>
      </div>
      <div class="col-md-5 whySmallPara">
        <div class="row">
          <div class="col-md-6">
            <p class="whySmallHeading">PEACE WITH GOD</p>
            <p class="whySmallpara">
              Far far away, behind the word mountains, far from the
              countries Vokalia and Consonantia.
            </p>
          </div>
          <div class="col-md-6">
            <p class="whySmallHeading">PEACE WITH GOD</p>
            <p class="whySmallpara">
              Far far away, behind the word mountains, far from the
              countries Vokalia and Consonantia.
            </p>
          </div>
          <div class="col-md-6">
            <p class="whySmallHeading">PEACE WITH GOD</p>
            <p class="whySmallpara">
              Far far away, behind the word mountains, far from the
              countries Vokalia and Consonantia.
            </p>
          </div>
          <div class="col-md-6">
            <p class="whySmallHeading">PEACE WITH GOD</p>
            <p class="whySmallpara">
              Far far away, behind the word mountains, far from the
              countries Vokalia and Consonantia..
            </p>
          </div>
        </div>
        <a href="#" class="btn btn-primary mt-5 sendbtn"
          >Send us your prayer request</a
          >
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 mx-auto text-center">
        <h6>Testimonial</h6>
        <h2>Living Testimonies</h2>
      </div>
    </div>
  </div>
  <div class="testimonial">
    <!-- <div class="row"> -->
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center cardSlider">
        <div class="card-body">
          <h3 class="testimonial-heading pt-3">
            Far far away, behind the word mountains
          </h3>
          <p class="card-text">
            <i>
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.</i
              >
          </p>
          <img
            src="assets/img/test.jpg"
            class="rounded-circle mx-auto"
            width="50"
            height="50"
            alt=""
            />
          <h6 class="text-dark">Jason Campbell</h6>
          <p class="text-muted">Person</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section bg-white mx-2 mx-md-5 serviceSection">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 mx-auto">
        <h6 class="text-center">Our Services</h6>
        <h2 class="text-center">Church Service</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service text-center mt-5">
          <img src="assets/img/branch-with-leaves.svg" alt="">
          <h3>Praise and Worship</h3>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts.
          </p>
          <a href="" class="readmore"
            >
            <span>
              <h6>+Read Me</h6>
            </span>
          </a
            >
        </div>
      </div>
      <div class="col-md-4">
        <div class="service text-center mt-5">
          <img src="assets/img/church.svg" alt="">
          <h3>Praise and Worship</h3>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts.
          </p>
          <a href="" class="readmore"
            >
            <span>
              <h6>+Read Me</h6>
            </span>
          </a
            >
        </div>
      </div>
      <div class="col-md-4">
        <div class="service text-center mt-5">
          <img src="assets/img/open-book.svg" alt="">
          <h3>Praise and Worship</h3>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts.
          </p>
          <a href="" class="readmore"
            >
            <span>
              <h6>+Read Me</h6>
            </span>
          </a
            >
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section bg-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 text-center text-md-start mb-4 mb-md-0">
        <h2 class="heading text-white">
          Join with us as we worship the Lord
        </h2>
      </div>
      <div class="col-md-5 text-center text-md-end">
        <a href="" class="btn btn-primary px-5 joinBtn">Join Us</a>
      </div>
    </div>
  </div>
</div>

