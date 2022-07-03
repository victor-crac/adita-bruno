<template>
  <Head>
    <title>New Campaign</title>
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
          <Nav />
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12">
          <!-- Row -->
          <bread-crumb :links="hypers"/>
          <!-- /Row -->

          <!-- Row -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="dashboard_container">
                <div class="dashboard_container_header">
                  <div class="dashboard_fl_1">
                    <h4 class="text-4xl font-sans" >
                      Create a cause and start your journey to changing lives
                    </h4>
                  </div>
                </div>
                <div class="dashboard_container_body p-4">
                  <flash-messages></flash-messages>
                  <form @submit.prevent="submit">
                    <!-- Row -->
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="dashboard_container">
                          <div class="dashboard_container_header">
                            <div class="dashboard_fl_1">
                              <h4>Your Business or organization details</h4>
                            </div>
                          </div>
                          <div class="dashboard_container_body p-4">
                            <!-- Basic info -->
                            <div class="submit-section">
                              <div class="form-row">

                                <!--=====form component ===== -->
                                    <!-- <form-component v-for="(item,index) in fields"
                                        :label="item.label"
                                        :name="item.name"
                                        :placeholder="item.placeholder"
                                        :value="item.value"
                                        :inputType="item.inputType"
                                        :errorTxt="item.errorTxt"
                                         v-bind:key="index"/> -->

                                <!--=========end of form component======-->


                                <div class="form-group col-md-4">
                                  <label>Name*</label>
                                  <input
                                    name="business_name"
                                    type="text"
                                    class="form-control"
                                    placeholder="Name of your Organization"
                                    v-model="form.business_name"
                                  />
                                  <div
                                    v-if="form.errors.business_name"
                                    v-text="form.errors.business_name"
                                    class="text text-danger"
                                  ></div>
                                </div>

                                <div class="form-group col-md-4">
                                  <label>Email*</label>
                                  <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    placeholder="Email"
                                    v-model="form.email"
                                  />
                                  <div
                                    v-if="form.errors.email"
                                    v-text="form.errors.email"
                                    class="text text-danger"
                                  ></div>
                                </div>

                                <div class="form-group col-md-4">
                                  <label>Phone*</label>
                                  <input
                                    name="phone"
                                    type="text"
                                    class="form-control"
                                    placeholder="Phone Number"
                                    v-model="form.phone"
                                  />
                                  <div
                                    v-if="form.errors.phone"
                                    v-text="form.errors.phone"
                                    class="text text-danger"
                                  ></div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label>Reg Number*</label>
                                  <input
                                    name="registration_number"
                                    type="text"
                                    class="form-control"
                                    placeholder="Registration No or NIN"
                                    v-model="form.registration_number"
                                  />
                                  <div
                                    v-if="form.errors.registration_number"
                                    v-text="form.errors.registration_number"
                                    class="text text-danger"
                                  ></div>
                                </div>

                                <div class="form-group col-md-4">
                                  <label>Physical Address*</label>
                                  <input
                                    name="physical_address"
                                    type="text"
                                    class="form-control"
                                    placeholder="Physical Address"
                                    v-model="form.physical_address"
                                  />
                                  <div
                                    v-if="form.errors.physical_address"
                                    v-text="form.errors.physical_address"
                                    class="text text-danger"
                                  ></div>
                                </div>

                                 <div class="form-group col-md-4">
                                  <label>Website</label>
                                  <input
                                    name="website"
                                    type="url"
                                    class="form-control"
                                    placeholder="URL"
                                    v-model="form.website"
                                  />
                                  <div
                                    v-if="form.errors.website"
                                    v-text="form.errors.website"
                                    class="text text-danger"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <!-- Basic info -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Row -->

                    <!-- Basic info -->
                    <div class="submit-section">
                      <div class="dashboard_fl_1">
                        <h4>Campaign Details</h4>
                        <hr />
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Title*</label>
                          <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Cause Title"
                            v-model="form.name"
                          />
                          <div
                            v-if="form.errors.name"
                            v-text="form.errors.name"
                            class="text text-danger"
                          ></div>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Target Amount</label>
                          <input
                            type="text"
                            name="target_amount"
                            class="form-control"
                            placeholder="199.10"
                            v-model="form.target_amount"
                          />
                          <div
                            v-if="form.errors.target_amount"
                            v-text="form.errors.target_amount"
                            class="text text-danger"
                          ></div>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Tags</label>
                          <input
                            name="tags"
                            type="text"
                            class="form-control"
                            placeholder="Eg. Environment, Education, Change the world"
                          />
                          <div
                            v-if="form.errors.tags"
                            v-text="form.errors.tags"
                            class="text text-danger"
                          ></div>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Banner*</label>

                          <input
                            type="file"
                            name="banner"
                            accept="image/*"
                            @input="form.banner = $event.target.files[0]"
                            class="form-control"
                          />
                          <progress
                            v-if="form.progress"
                            :value="form.progress.percentage"
                            max="100"
                          >
                            {{ form.progress.percentage }}%
                          </progress>
                          <div
                            v-if="form.errors.banner"
                            v-text="form.errors.banner"
                            class="text text-danger"
                          ></div>
                        </div>

                        <div class="form-group col-md-12">
                          <label>About the cause*</label>
                          <textarea
                            name="description"
                            class="form-control"
                            placeholder="Description"
                            v-model="form.description"
                          ></textarea>
                          <div
                            v-if="form.errors.description"
                            v-text="form.errors.description"
                            class="text text-danger"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <!-- Basic info -->
                    <div class="row">
                      <div class="form-group col-lg-12 col-md-12 pull-right">
                        <button
                          class="btn btn-theme"
                          type="submit"
                          :disabled="form.processing"> Save Cause </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============================ Dashboard: Dashboard End ================================== -->
</template>
<script>
import Nav from "./../Partials/Nav.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import BreadCrumb from "../../../Components/BreadCrumb.vue";
import FormComponent from "../../../Components/FormComponent.vue";


export default {
  components: { Nav ,BreadCrumb, FormComponent  },
  data(){
   return {
    //     // form fields for campaigner's business
    //  fields : [
    //         {name:"name",placeholder:"Provide your business",inputType:"text",label:"Name",value:form.business_name, errorTxt:form.errors.business_name},

    //         {name:"email",placeholder:"Enter your business email",inputType:"email",label:"Email",value:form.email, errorTxt:form.errors.email},

    //         {name:"phone",placeholder:"Business contact",inputType:"phone",label:"Phone",value:form.phone, errorTxt:form.errors.phone},

    //         {name:"registration_number",placeholder:"Provide NIN number",inputType:"text",label:"Reg Number",value:form.registration_number, errorTxt:form.errors.registration},

    //         {name:"physical_address",placeholder:"Physical Address",inputType:"text",label:"Physical Address",value:form.physical_address, errorTxt:form.errors.physical_address},

    //         {name:"website",placeholder:"e.g https://example.com/",inputType:"url",label:"Website",value:form.website, errorTxt:form.errors.website},
    // ],
    form :useForm({
        business_name:"",
        email: "",
        phone: "",
        name: "",
        banner: "",
        target_amount: "",
        tags: "",
        registration_number: "",
        physical_address: "",
        website: "",
        description: ""
        }),
     hypers : [
            {name:"Home",link:"/"},

            {name:"Dashboard",url:"/dashboard"},
            // {"name":"Campaigns","url":"/dashboard/causes"},
            {name:"Create a campaign",url:"/dashboard/causes/create"},
       ],
   }
  },
  methods:{
    submit(){

         console.log(this.form);
   this.form.post("/dashboard/causes/store");
    }
  }
};
</script>


<!-- <script setup>




// links



// // form fields for campaigner's business
// const fields = [
//     {name:"name",placeholder:"Provide your business",inputType:"text",label:"Name",value:form.business_name, errorTxt:form.errors.business_name},

//     {name:"email",placeholder:"Enter your business email",inputType:"email",label:"Email",value:form.email, errorTxt:form.errors.email},

//     {name:"phone",placeholder:"Business contact",inputType:"phone",label:"Phone",value:form.phone, errorTxt:form.errors.phone},

//     {name:"registration_number",placeholder:"Provide NIN number",inputType:"text",label:"Reg Number",value:form.registration_number, errorTxt:form.errors.registration},

//     {name:"physical_address",placeholder:"Physical Address",inputType:"text",label:"Physical Address",value:form.physical_address, errorTxt:form.errors.physical_address},

//     {name:"website",placeholder:"e.g https://example.com/",inputType:"url",label:"Website",value:form.website, errorTxt:form.errors.website},
//     // {name:"",placeholder:"",inputType:"",label:"",form:form},
//     // {name:"",placeholder:"",inputType:"",label:"",form:form},
// ];
</script> -->
