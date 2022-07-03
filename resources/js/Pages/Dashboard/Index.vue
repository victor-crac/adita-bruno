<template>
    <header-title :type="`Dashboard`" :content="`Crowd funding, Campaigns and awareness`" />
  <Head>
    <title>Dashboard</title>
    <meta
      type="description"
      content="Crowd funding, Campaigns and awareness"
      head-key="description"
    />
  </Head>
  <!-- ============================ Dashboard: Dashboard Start ================================== -->
  <section class="gray pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-3">
         <Nav/>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12">
          <!-- Row -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- /Row -->

            <!-- {{JSON.stringify(donations)}} -->

          <!--=====Dashboard cards====== -->
          <div class="row">
                <dasboard-cards :items="statCards"/>
           </div>
          <!--===end of dashboard cards===== -->

          <!-- row-->
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="content-box-01">
                <div class="content-box-01-head mb-3">
                  <h5 class="mb-0">Upcoming Courses</h5>
                </div>
                <div class="content-box-01-full mb-4">
                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >Figma: Create a beautiful design using pen tool</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>

                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >WordPress: How to use Pro Ultra KCF plugin</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>

                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >PHP: How to create working contact form in PHP 7</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="content-box-01">
                <div class="content-box-01-head mb-3">
                  <h5 class="mb-0">Completed Courses</h5>
                </div>
                <div class="content-box-01-full mb-4">
                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >Figma: How to create seperate dashboard in Figma</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>

                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >HTML5: Build wornderful popup form in HTML5</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>

                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >Adobe: Using Dreamwear8 with Notepad advance</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="content-box-01">
                <div class="content-box-01-head mb-3">
                  <h5 class="mb-0">Popular Courses</h5>
                </div>
                <div class="content-box-01-full mb-4">
                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >Figma: Create a beautiful design using pen tool</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>

                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >Figma: Create a beautiful design using pen tool</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>

                  <div class="learnup-list">
                    <div class="learnup-list-thumb">
                      <a href="detail-6.html"
                        ><img
                          src="https://via.placeholder.com/100x100"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="learnup-list-caption">
                      <h6>
                        <a href="detail-6.html"
                          >Figma: Create a beautiful design using pen tool</a
                        >
                      </h6>
                      <div class="learnup-info mt-2">
                        <span class="mr-3">2h 22m</span
                        ><span>4,52,236 Students</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Row End -->

          <!-- Row -->
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="course_overlay_cat">
                    <div class="course_overlay_cat_thumb">
                      <a href="#" tabindex="0"
                        ><img
                          src="https://via.placeholder.com/700x500"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="course_overlay_cat_caption">
                      <div class="llp-left">
                        <h4><a href="#">Web Designing</a></h4>
                        <span>17 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="course_overlay_cat">
                    <div class="course_overlay_cat_thumb">
                      <a href="#" tabindex="0"
                        ><img
                          src="https://via.placeholder.com/700x500"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="course_overlay_cat_caption">
                      <div class="llp-left">
                        <h4><a href="#">Digital Marketing</a></h4>
                        <span>20 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="course_overlay_cat">
                    <div class="course_overlay_cat_thumb">
                      <a href="#" tabindex="0"
                        ><img
                          src="https://via.placeholder.com/700x500"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="course_overlay_cat_caption">
                      <div class="llp-left">
                        <h4><a href="#">Account & Chart</a></h4>
                        <span>22 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="course_overlay_cat">
                    <div class="course_overlay_cat_thumb">
                      <a href="#" tabindex="0"
                        ><img
                          src="https://via.placeholder.com/700x500"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </div>
                    <div class="course_overlay_cat_caption">
                      <div class="llp-left">
                        <h4><a href="#">Business Development</a></h4>
                        <span>10 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h6>Notifications</h6>
                </div>
                <div class="ground-list ground-hover-list">
                  <div class="ground ground-list-single">
                    <a href="#">
                      <div class="btn-circle-40 btn-success">
                        <i class="ti-calendar"></i>
                      </div>
                    </a>

                    <div class="ground-content">
                      <h6><a href="#">Maryam Amiri</a></h6>
                      <small class="text-fade"
                        >Check New Admin Dashboard..</small
                      >
                      <span class="small">Just Now</span>
                    </div>
                  </div>

                  <div class="ground ground-list-single">
                    <a href="#">
                      <div class="btn-circle-40 btn-danger">
                        <i class="ti-calendar"></i>
                      </div>
                    </a>

                    <div class="ground-content">
                      <h6><a href="#">Maryam Amiri</a></h6>
                      <small class="text-fade">You can Customize..</small>
                      <span class="small">02 Min Ago</span>
                    </div>
                  </div>

                  <div class="ground ground-list-single">
                    <a href="#">
                      <div class="btn-circle-40 btn-info">
                        <i class="ti-calendar"></i>
                      </div>
                    </a>

                    <div class="ground-content">
                      <h6><a href="#">Maryam Amiri</a></h6>
                      <small class="text-fade"
                        >Need Responsive Business Tem...</small
                      >
                      <span class="small">10 Min Ago</span>
                    </div>
                  </div>

                  <div class="ground ground-list-single">
                    <a href="#">
                      <div class="btn-circle-40 btn-warning">
                        <i class="ti-calendar"></i>
                      </div>
                    </a>

                    <div class="ground-content">
                      <h6><a href="#">Maryam Amiri</a></h6>
                      <small class="text-fade">Next Meeting on Tuesday..</small>
                      <span class="small">15 Min Ago</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->

          <!-- Row -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="dashboard_container">
                <div class="dashboard_container_header">
                  <div class="dashboard_fl_1">
                    <h4>Recent Order</h4>
                  </div>
                </div>
                <div class="dashboard_container_body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Order</th>
                          <th scope="col">Date</th>
                          <th scope="col">Status</th>
                          <th scope="col">Total</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">#0000149</th>
                          <td>02 July 2020</td>
                          <td>
                            <span class="payment_status inprogress"
                              >In Progress</span
                            >
                          </td>
                          <td>$110.00</td>
                          <td>
                            <div class="dash_action_link">
                              <a href="#" class="view">View</a>
                              <a href="#" class="cancel">Cancel</a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#0000150</th>
                          <td>04 July 2020</td>
                          <td>
                            <span class="payment_status complete"
                              >Completed</span
                            >
                          </td>
                          <td>$119.00</td>
                          <td>
                            <div class="dash_action_link">
                              <a href="#" class="view">View</a>
                              <a href="#" class="cancel">Cancel</a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#0000151</th>
                          <td>07 July 2020</td>
                          <td>
                            <span class="payment_status complete"
                              >Completed</span
                            >
                          </td>
                          <td>$149.00</td>
                          <td>
                            <div class="dash_action_link">
                              <a href="#" class="view">View</a>
                              <a href="#" class="cancel">Cancel</a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#0000152</th>
                          <td>10 July 2020</td>
                          <td>
                            <span class="payment_status pending"
                              >Pending Payment</span
                            >
                          </td>
                          <td>$199.00</td>
                          <td>
                            <div class="dash_action_link">
                              <a href="#" class="view">View</a>
                              <a href="#" class="cancel">Cancel</a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>
      </div>
    </div>
  </section>
  <!-- ============================ Dashboard: Dashboard End ================================== -->
</template>
<script>
import HeaderTitle from '../../Components/HeaderTitle.vue';

import Nav from "./Partials/Nav.vue";
import DasboardCards from '../../Components/DasboardCards.vue';

export default {
  components: {
    Nav,
    HeaderTitle,
    DasboardCards
},
  props:["users","campaigns","donations"],
  data() {
    return {
        statCards:[
            {label:"Users",total:this.users.length,icon:"ti-user",color:"text-warning" },
            {label:"Saved Campaigns",total:this.campaigns.length,icon:"ti-pie-chat",color:"text-success" },
            {label:"Donations",total:this.donations.length,icon:"ti-user",color:"text-danger" }

        ]
    }
  },
};
</script>
