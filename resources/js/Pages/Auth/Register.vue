<template>
  <Head>
    <title>Register</title>
    <meta
      type="description"
      content="Crowd funding, Campaigns and awareness"
      head-key="description"
    />
  </Head>
  <!-- ========================== SignUp Elements ============================= -->
  <section class="log-space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11 col-md-11">
          <div class="row no-gutters position-relative log_rads">
            <div
              class="col-lg-6 col-md-5 bg-cover"
              style="background: #1f2431 url(assets/img/log.png) no-repeat"
            >
              <!--
                <div class="lui_9okt6">
                  <div class="_loh_revu97">
                    <div id="reviews-login">

                      <div class="_loh_r96">
                        <div class="_bloi_quote">
                          <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="_loh_r92">
                          <h4>Good Services</h4>
                        </div>
                        <div class="_loh_r93">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                          </p>
                        </div>
                        <div class="_loh_foot_r93">
                          <h4>Shilpa D. Setty</h4>
                          <span>Team Leader</span>
                        </div>
                      </div>


                      <div class="_loh_r96">
                        <div class="_bloi_quote">
                          <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="_loh_r92">
                          <h4>Good Services</h4>
                        </div>
                        <div class="_loh_r93">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                          </p>
                        </div>
                        <div class="_loh_foot_r93">
                          <h4>Adam Wilsom</h4>
                          <span>Mak Founder</span>
                        </div>
                      </div>
                      <div class="_loh_r96">
                        <div class="_bloi_quote">
                          <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="_loh_r92">
                          <h4>Customer Support</h4>
                        </div>
                        <div class="_loh_r93">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                          </p>
                        </div>
                        <div class="_loh_foot_r93">
                          <h4>Kunal M. Wilsom</h4>
                          <span>CEO & Founder</span>
                        </div>
                      </div>

                      <div class="_loh_r96">
                        <div class="_bloi_quote">
                          <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="_loh_r92">
                          <h4>Ultimate Services</h4>
                        </div>
                        <div class="_loh_r93">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                          </p>
                        </div>
                        <div class="_loh_foot_r93">
                          <h4>Mark Jugermark</h4>
                          <span>MCL Founder</span>
                        </div>
                      </div>

                      <div class="_loh_r96">
                        <div class="_bloi_quote">
                          <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="_loh_r92">
                          <h4>Item Support</h4>
                        </div>
                        <div class="_loh_r93">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                          </p>
                        </div>
                        <div class="_loh_foot_r93">
                          <h4>Kirti Washinton</h4>
                          <span>Web Designer</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>-->
            </div>

            <div class="col-lg-6 col-md-7 position-static">
              <div class="log_wraps">
                <form @submit.prevent="submit">
                  <div class="log__heads">
                    <h4 class="mt-0 logs_title">
                      Create An <span class="theme-cl">Account</span>
                    </h4>
                  </div>
                  <div class="row form-group">
                    <div class="col-6">
                      <label>First Name*</label>
                      <input
                        type="text"
                        name="firstname"
                        class="form-control"
                        placeholder="John"
                        v-model="form.firstname"
                      />
                      <div
                        v-if="form.errors.firstname"
                        v-text="form.errors.firstname"
                        class="text text-danger"
                      ></div>
                    </div>
                    <div class="col-6">
                      <label>Last Name*</label>
                      <input
                        type="text"
                        name="lastname"
                        class="form-control"
                        placeholder="Doe"
                        v-model="form.lastname"
                      />
                      <div
                        v-if="form.errors.lastname"
                        v-text="form.errors.lastname"
                        class="text text-danger"
                      ></div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-6">
                      <label>Email Address*</label>
                      <input
                        name="email"
                        type="text"
                        class="form-control"
                        placeholder="johndoe@gmail.com"
                        v-model="form.email"
                      />
                      <div
                        v-if="form.errors.email"
                        v-text="form.errors.email"
                        class="text text-danger"
                      ></div>
                    </div>
                    <div class="col-6">
                      <label>Phone Number</label>
                      <input
                        type="text"
                        class="form-control"
                        name="phone"
                        placeholder="Eg +256 7000 000000"
                        v-model="form.phone"
                      />
                      <div
                        v-if="form.errors.phone"
                        v-text="form.errors.phone"
                        class="text text-danger"
                      ></div>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-6">
                      <label>Password*</label>
                      <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="*******"
                        v-model="form.password"
                      />
                      <div
                        v-if="form.errors.password"
                        v-text="form.errors.password"
                        class="text text-danger"
                      ></div>
                    </div>
                    <div class="col-6">
                      <label>Confirm Password*</label>
                      <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        placeholder="*******"
                        v-model="form.password_confirmation"
                      />
                      <div
                        v-if="form.errors.password_confirmation"
                        v-text="form.errors.password_confirmation"
                        class="text text-danger"
                      ></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button
                      type="submit"
                      class="btn btn-primary btn_apply w-100"
                      :disabled="form.processing"
                    >
                      Sign Up
                    </button>
                  </div>
                </form>

                <div class="form-group text-center">
                  <span>Or SignUp with</span>
                </div>

                <div class="social_logs">
                  <ul>
                    <li class="fb-login">
                      <a href="#"
                        ><img
                          src="assets/img/google.svg"
                          class="img-fluid mr-2"
                          width="15"
                          alt=""
                        />Google</a
                      >
                    </li>
                    <li class="gp-login">
                      <a href="#"
                        ><img
                          src="assets/img/facebook.svg"
                          class="img-fluid mr-2"
                          width="15"
                          alt=""
                        />Facebook</a
                      >
                    </li>
                  </ul>
                </div>

                <div class="form-group text-center mb-0 mt-3">
                  Have You Already An Account?
                  <Link href="/login" class="theme-cl">LogIn</Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================== Login Elements ============================= -->
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
let form = useForm({
  firstname: "",
  lastname: "",
  email: "",
  phone: "",
  password: "",
  password_confirmation: "",
});

let submit = () => {
  form.post("/register");
};
</script>
