<template>
  <Head>
    <title>Login</title>
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

            <div class="col-lg-6 col-md-7 position-static p-4">
              <div class="log_wraps">
                <div class="log__heads">
                  <h4 class="mt-0 logs_title">
                    Sign <span class="theme-cl">In</span>
                  </h4>
                  <div
                    class="alert alert-danger alert-dismissible fade show"
                    v-if="form.errors.error"
                  >
                    {{ form.errors.error }}
                  </div>
                </div>
                <form @submit.prevent="submit">
                  <div class="form-group">
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

                  <div class="form-group">
                    <label
                      >Password*<Link href="/forgot-password" class="elio_right"
                        >Forget Password?</Link
                      ></label>
                    <input
                      name="password"
                      type="password"
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

                  <div class="form-group">
                    <button
                      type="submit"
                      class="btn btn-primary btn_apply w-100"
                      :disabled="form.processing"
                    >
                      Sign In
                    </button>
                  </div>
                </form>

                <div class="form-group text-center">
                  <span>Or SignIn with</span>
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
                  You Have't Any Account?
                  <Link href="/register" class="theme-cl">SignUp</Link>
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

<script>
import { useForm } from "@inertiajs/inertia-vue3";
export default{
   data() {
    return {
         form:useForm(),

    }
   },
   methods: {
    submit() {
      this.form.post("/forgot-password");
    },
   },
}
</script>
