<template>
    <header-title
        :title="`Home`"
        :type="`description`"
        :content="content"/>
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero_banner shadow rlt bg-light">
      <div class="container">
        <!-- Type -->
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="banner-search-2 transparent">
              <h1 class="big-header-capt cl_2 mb-2 f_2">
                Need to raise money?<br />
              </h1>
              <p>
               For a community cause, environment or any other cause
              </p>
              <!-- this is rendered before user loginning in -->
              <div v-if="user == null" class="mt-4">
                <Link href="/login" class="btn btn-modern dark"
                  >Create a Campaign<span><i class="ti-arrow-right"></i></span
                ></Link>
              </div>
    <!-- ================================ -->

    <!-- ========Rendered when user has logged in -->
                <div v-else class="mt-4">
                <Link href="/dashboard/causes/create" class="btn btn-modern dark"
                  >Create a Campaign<span><i class="ti-arrow-right"></i></span
                ></Link>
              </div>
<!-- =============================== -->
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="flixio">
              <img
                class="img-fluid"
                src="https://via.placeholder.com/550x490"
                alt=""/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Featured Courses Start ================================== -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="sec-heading center">
              <p>New &amp; Trending</p>
              <h2>
                <span class="theme-cl">Most</span> recently added campaigns
              </h2>
            </div>
          </div>
        </div>

        <div class="row" v-if="campaigns.data.length > 0">
          <!-- Cource Grid 1 -->
          <div class="col-lg-4 col-md-6 col-sm-12" v-for="campaign in campaigns.data" :key="campaign.id">
            <div class="education_block_grid style_2">
              <div class="education_block_thumb n-shadow">
                 <Link :href="$route('campaigns.index')">
                 <img v-bind:src="campaign.banner"
                    class="img-fluid"
                    alt=""
                /></Link>
              </div>

              <div class="education_block_body">
                <h4 class="bl-title">
                  <a href="course-detail.html"
                    >{{ campaign.name }}</a
                  >
                </h4>
              </div>

              <div class="cources_facts" v-if="campaign.tags.length > 0">
                <ul class="cources_facts_list" v-for="tag in campaign.tags" :key="tag.id">
                  <li class="facts-1">{{  tag.name }}</li>
                </ul>
              </div>

              <div class="cources_info">
                <div class="cources_info_first">
                  <ul>
                    <li><strong>1,84684 Views</strong></li>
                    <li class="theme-cl">3h 30min</li>
                  </ul>
                </div>
                <div class="cources_info_last">
                  <h3>{{ campaign.target_amount }} {{ campaign.currency }}</h3>
                </div>
              </div>

              <div class="education_block_footer">
                <div class="education_block_author">
                  <div class="path-img">
                    <a href="instructor-detail.html">
                      <img v-bind:src="campaign.banner" class="img-fluid" /></a>
                  </div>
                  <h5><a href="#">   {{  campaign.owner.name  }} </a></h5>
                </div>
                <span class="education_block_time"

                  ><i class="ti-calendar mr-1"></i>{{ campaign.last_created }}</span
                >
              </div>
            </div>
          </div>

        </div>

        <div class="row justify-content-center" v-if="campaigns.data.length > 6">
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="text-center">
              <a href="#" class="btn btn-theme btn-browse-btn"
                >Browse More Courses</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============================ Featured Courses End ================================== -->

    <!-- ============================ Featured Category Start ================================== -->
    <section class="bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="sec-heading center">
              <p>Popular Category</p>
              <h2>
                <span class="theme-cl">Hot &amp; Popular</span> Category For
                Learn
              </h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 p-0">
            <div class="arrow_slide three_slide-dots arrow_middle">
              <!-- Single Slide -->
              <div class="singles_items">
                <div class="edu_cat">
                  <div class="pic">
                    <a
                      class="pic-main"
                      href="#"
                      style="
                        background-image: url(https://via.placeholder.com/700x500);
                      "
                    ></a>
                  </div>
                  <div class="edu_data">
                    <h4 class="title"><a href="#">Finance & Accounting</a></h4>
                    <ul class="meta">
                      <li class="video">
                        <i class="ti-video-clapper"></i>23 Videos
                      </li>
                      <li class="lessions">
                        <i class="ti-book"></i>54 Lessions
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="edu_cat">
                  <div class="pic">
                    <a
                      class="pic-main"
                      href="#"
                      style="
                        background-image: url(https://via.placeholder.com/700x500);
                      "
                    ></a>
                  </div>
                  <div class="edu_data">
                    <h4 class="title"><a href="#">Gym & Lifestyle</a></h4>
                    <ul class="meta">
                      <li class="video">
                        <i class="ti-video-clapper"></i>23 Videos
                      </li>
                      <li class="lessions">
                        <i class="ti-book"></i>54 Lessions
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="edu_cat">
                  <div class="pic">
                    <a
                      class="pic-main"
                      href="#"
                      style="
                        background-image: url(https://via.placeholder.com/700x500);
                      "
                    ></a>
                  </div>
                  <div class="edu_data">
                    <h4 class="title"><a href="#">Health & Fitness</a></h4>
                    <ul class="meta">
                      <li class="video">
                        <i class="ti-video-clapper"></i>23 Videos
                      </li>
                      <li class="lessions">
                        <i class="ti-book"></i>54 Lessions
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="edu_cat">
                  <div class="pic">
                    <a
                      class="pic-main"
                      href="#"
                      style="
                        background-image: url(https://via.placeholder.com/700x500);
                      "
                    ></a>
                  </div>
                  <div class="edu_data">
                    <h4 class="title">
                      <a href="#">Software & Development</a>
                    </h4>
                    <ul class="meta">
                      <li class="video">
                        <i class="ti-video-clapper"></i>23 Videos
                      </li>
                      <li class="lessions">
                        <i class="ti-book"></i>54 Lessions
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="edu_cat">
                  <div class="pic">
                    <a
                      class="pic-main"
                      href="#"
                      style="
                        background-image: url(https://via.placeholder.com/700x500);
                      "
                    ></a>
                  </div>
                  <div class="edu_data">
                    <h4 class="title"><a href="#">Business Development</a></h4>
                    <ul class="meta">
                      <li class="video">
                        <i class="ti-video-clapper"></i>23 Videos
                      </li>
                      <li class="lessions">
                        <i class="ti-book"></i>54 Lessions
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============================ Featured Category End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <!-- <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="list_facts_wrap">
              <div class="sec-heading mb-3">
                <h2>
                  Know about <span class="theme-cl">e-Learn</span> learning
                  platform
                </h2>
              </div>
              <div class="list_facts">
                <div class="list_facts_icons"><i class="ti-desktop"></i></div>
                <div class="list_facts_caption">
                  <h4>Nemo enim ipsam voluptatem quia.</h4>
                  <p>
                    No one rejects, dislikes, or avoids pleasure itself, because
                    it is pleasure
                  </p>
                </div>
              </div>
              <div class="list_facts">
                <div class="list_facts_icons"><i class="ti-heart"></i></div>
                <div class="list_facts_caption">
                  <h4>Nemo enim ipsam voluptatem quia.</h4>
                  <p>
                    No one rejects, dislikes, or avoids pleasure itself, because
                    it is pleasure
                  </p>
                </div>
              </div>
              <div class="list_facts">
                <div class="list_facts_icons">
                  <i class="ti-harddrives"></i>
                </div>
                <div class="list_facts_caption">
                  <h4>Nemo enim ipsam voluptatem quia.</h4>
                  <p>
                    No one rejects, dislikes, or avoids pleasure itself, because
                    it is pleasure
                  </p>
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-modern"
              >Know More<span><i class="ti-arrow-right"></i></span
            ></a>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="list_facts_wrap_img">
              <img
                src="https://via.placeholder.com/550x490"
                class="img-fluid"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- ========================== About Facts List Section =============================== -->

    <!-- ========================== Featured Courses Section =============================== -->
    <section class="gray">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="sec-heading center">
              <p>Hot &amp; Trending</p>
              <h2>
                <span class="theme-cl">Recent</span> Courses by professional
                Instructor
              </h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 p-0">
            <div class="arrow_slide three_slide-dots arrow_middle">
              <!-- Single Slide -->
              <div class="singles_items">
                <div class="education_block_grid style_2">
                  <div class="education_block_thumb">
                    <a href="course-detail.html"
                      ><img
                        src="https://via.placeholder.com/700x500"
                        class="img-fluid"
                        alt=""
                    /></a>
                    <div class="education_ratting">
                      <i class="fa fa-star"></i>4.7 (40)
                    </div>
                  </div>

                  <div class="education_block_body">
                    <h4 class="bl-title">
                      <a href="course-detail.html"
                        >The Complete Business Plan Course (Includes 50
                        Templates)</a
                      >
                    </h4>
                  </div>

                  <div class="cources_info_style3">
                    <ul>
                      <li><i class="ti-eye mr-2"></i>10682 Views</li>
                      <li>
                        <i class="ti-control-skip-forward mr-2"></i>82 Lectures
                      </li>
                      <li><i class="ti-time mr-2"></i>9h 45min</li>
                    </ul>
                  </div>

                  <div class="education_block_footer">
                    <div class="education_block_author">
                      <div class="path-img">
                        <a href="instructor-detail.html"
                          ><img
                            src="https://via.placeholder.com/500x500"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                      <h5>
                        <a href="instructor-detail.html">Litha Jethaani</a>
                      </h5>
                    </div>
                    <div class="cources_price_foot">
                      <span class="price_off">$199.00</span>149.00
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="education_block_grid style_2">
                  <div class="education_block_thumb">
                    <a href="course-detail.html"
                      ><img
                        src="https://via.placeholder.com/700x500"
                        class="img-fluid"
                        alt=""
                    /></a>
                    <div class="education_ratting">
                      <i class="fa fa-star"></i>4.9 (29)
                    </div>
                  </div>

                  <div class="education_block_body">
                    <h4 class="bl-title">
                      <a href="course-detail.html"
                        >An Entire MBA In 1 Course:Award Winning Business School
                        Prof</a
                      >
                    </h4>
                  </div>

                  <div class="cources_info_style3">
                    <ul>
                      <li><i class="ti-eye mr-2"></i>9882 Views</li>
                      <li>
                        <i class="ti-control-skip-forward mr-2"></i>47 Lectures
                      </li>
                      <li><i class="ti-time mr-2"></i>6h 30min</li>
                    </ul>
                  </div>

                  <div class="education_block_footer">
                    <div class="education_block_author">
                      <div class="path-img">
                        <a href="instructor-detail.html"
                          ><img
                            src="https://via.placeholder.com/500x500"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                      <h5><a href="instructor-detail.html">Adam Gilvork</a></h5>
                    </div>
                    <div class="cources_price_foot">
                      <span class="price_off">$89.65</span>49.10
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="education_block_grid style_2">
                  <div class="education_block_thumb">
                    <a href="course-detail.html"
                      ><img
                        src="https://via.placeholder.com/700x500"
                        class="img-fluid"
                        alt=""
                    /></a>
                    <div class="education_ratting">
                      <i class="fa fa-star"></i>4.7 (60)
                    </div>
                  </div>

                  <div class="education_block_body">
                    <h4 class="bl-title">
                      <a href="course-detail.html"
                        >The Complete Financial Analyst Course 2020</a
                      >
                    </h4>
                  </div>

                  <div class="cources_info_style3">
                    <ul>
                      <li><i class="ti-eye mr-2"></i>5882 Views</li>
                      <li>
                        <i class="ti-control-skip-forward mr-2"></i>52 Lectures
                      </li>
                      <li><i class="ti-time mr-2"></i>5h 15min</li>
                    </ul>
                  </div>

                  <div class="education_block_footer">
                    <div class="education_block_author">
                      <div class="path-img">
                        <a href="instructor-detail.html"
                          ><img
                            src="https://via.placeholder.com/500x500"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                      <h5><a href="instructor-detail.html">Shilpa Shekh</a></h5>
                    </div>
                    <div class="cources_price_foot">
                      <span class="price_off">$149.77</span>99.00
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="education_block_grid style_2">
                  <div class="education_block_thumb">
                    <a href="course-detail.html"
                      ><img
                        src="https://via.placeholder.com/700x500"
                        class="img-fluid"
                        alt=""
                    /></a>
                    <div class="education_ratting">
                      <i class="fa fa-star"></i>4.8 (45)
                    </div>
                  </div>

                  <div class="education_block_body">
                    <h4 class="bl-title">
                      <a href="course-detail.html"
                        >PMP Exam Prep Seminar - PMBOK Guide 6</a
                      >
                    </h4>
                  </div>

                  <div class="cources_info_style3">
                    <ul>
                      <li><i class="ti-eye mr-2"></i>4732 Views</li>
                      <li>
                        <i class="ti-control-skip-forward mr-2"></i>32 Lectures
                      </li>
                      <li><i class="ti-time mr-2"></i>3h 30min</li>
                    </ul>
                  </div>

                  <div class="education_block_footer">
                    <div class="education_block_author">
                      <div class="path-img">
                        <a href="instructor-detail.html"
                          ><img
                            src="https://via.placeholder.com/500x500"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                      <h5>
                        <a href="instructor-detail.html">Shaurya Preet</a>
                      </h5>
                    </div>
                    <div class="cources_price_foot">
                      <span class="price_off">$107.77</span>55.99
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="education_block_grid style_2">
                  <div class="education_block_thumb">
                    <a href="course-detail.html"
                      ><img
                        src="https://via.placeholder.com/700x500"
                        class="img-fluid"
                        alt=""
                    /></a>
                    <div class="education_ratting">
                      <i class="fa fa-star"></i>4.7 (40)
                    </div>
                  </div>

                  <div class="education_block_body">
                    <h4 class="bl-title">
                      <a href="course-detail.html"
                        >Tableau 2020 A-Z:Hands-On Tableau Training For Data
                        Science!</a
                      >
                    </h4>
                  </div>

                  <div class="cources_info_style3">
                    <ul>
                      <li><i class="ti-eye mr-2"></i>7582 Views</li>
                      <li>
                        <i class="ti-control-skip-forward mr-2"></i>62 Lectures
                      </li>
                      <li><i class="ti-time mr-2"></i>3h 10min</li>
                    </ul>
                  </div>

                  <div class="education_block_footer">
                    <div class="education_block_author">
                      <div class="path-img">
                        <a href="instructor-detail.html"
                          ><img
                            src="https://via.placeholder.com/500x500"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                      <h5><a href="instructor-detail.html">Litha Anshal</a></h5>
                    </div>
                    <div class="cources_price_foot">
                      <span class="price_off">$99.77</span>47.99
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide -->
              <div class="singles_items">
                <div class="education_block_grid style_2">
                  <div class="education_block_thumb">
                    <a href="course-detail.html"
                      ><img
                        src="https://via.placeholder.com/700x500"
                        class="img-fluid"
                        alt=""
                    /></a>
                    <div class="education_ratting">
                      <i class="fa fa-star"></i>4.8 (70)
                    </div>
                  </div>

                  <div class="education_block_body">
                    <h4 class="bl-title">
                      <a href="course-detail.html"
                        >Tableau For Beginners: Get CA Certified, Grow Your
                        Career</a
                      >
                    </h4>
                  </div>

                  <div class="cources_info_style3">
                    <ul>
                      <li><i class="ti-eye mr-2"></i>7482 Views</li>
                      <li>
                        <i class="ti-control-skip-forward mr-2"></i>63 Lectures
                      </li>
                      <li><i class="ti-time mr-2"></i>6h 30min</li>
                    </ul>
                  </div>

                  <div class="education_block_footer">
                    <div class="education_block_author">
                      <div class="path-img">
                        <a href="instructor-detail.html"
                          ><img
                            src="https://via.placeholder.com/500x500"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                      <h5>
                        <a href="instructor-detail.html">Dhananjay Preet</a>
                      </h5>
                    </div>
                    <div class="cources_price_foot">
                      <span class="price_off">$79.0</span>49.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
    <!-- ========================== Featured Courses Section =============================== -->


    <!-- ============================== Start Newsletter ================================== -->
    <!-- <section class="newsletter theme-bg inverse-theme">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-8 col-sm-12">
            <div class="text-center">
              <h2>Join Thousand of those making others happy!</h2>
              <p>Subscribe our newsletter & get latest news and updation!</p>
              <form class="sup-form">
                <input
                  type="email"
                  class="form-control sigmup-me"
                  placeholder="Your Email Address"
                  required="required"
                />
                <input
                  type="submit"
                  class="btn btn-theme"
                  value="Get Started"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- ================================= End Newsletter =============================== -->
</template>

<script>
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import HeaderTitle from "../Components/HeaderTitle.vue";
export default{
    name:"Home",
   props: {campaigns: Object },

    /// loading custom components into the home page
    components:{
        HeaderTitle
    },
     computed:{
    user(){
      return this.$page.props.auth.user;
    }
},
mounted(){
    console.log(this.campaigns);
}
  }
</script>
