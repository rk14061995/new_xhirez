<section class="mainDiv backSet">
    <div class="container bg-white">
       <div class=" py-4">
            <div class="SearchBar mx-0">
                <div class="searchSkil">
                    <input type="text" class="form-control INpou" name="" placeholder="Job Title, Skills">
                </div>
                <div class="searchLo">
                    <input type="text" class="form-control INpou" name="" placeholder="Location ">
                </div>
                <div class="searchLo">
                    <select class="form-control INpou" name="">
                        <option selected="" disabled="">Experience</option>
                        <option class="">0-1 year</option>
                        <option class="">1-2 year</option>
                    </select>
                </div>
                <div class="searchbtn">
                    <button class="INpou"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="py-3">
                <ul class="d-flex mb-0 list-unstyled polaD">
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary">
                                <option selected disabled>Dates</option>
                                <option>Last 24 hours</option>
                                <option>Last 3 days</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary">
                                <option selected disabled>Location</option>
                                <option>Noida</option>
                                <option>Delhi</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary">
                                <option selected disabled>Salary</option>
                                <option>10K-20K</option>
                                <option>10K-20K</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="experience">
                                <option selected disabled>Experience</option>
                                <option>10K-20K</option>
                                <option>10K-20K</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary">
                                <option selected disabled>Remote</option>
                                <option>Remote</option>
                                <option>Temparary Remote</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary">
                                <option selected disabled>Education</option>
                                <option>10<sup>th</sup></option>
                                <option>12<sup>th</sup></option>
                                <option>Diploma</option>
                                <option>Bachelor's degree</option>
                                <option>Master's degree</option>
                            </select>
                        </span>
                    </li>
                </ul>
            </div>
       </div>
        <div class="row">
            <div class="col-md-5">
                <div class="">
                    <div class="my-2 px-2 dsp_P">
                        <div class="">
                            <ul class="d-flex mb-0 list-unstyled">
                                <li class="mr-1">
                                    <div class=""><small>Filter By:</small></div>
                                </li>
                                <li class="ml-1">
                                    <span>
                                        <select class="form-control filtSearch" name="salary">
                                            <option selected disabled>Salary</option>
                                            <option>10K-20K</option>
                                            <option>10K-20K</option>
                                        </select>
                                    </span>
                                </li>
                                <li class="ml-1">
                                    <span>
                                        <select class="form-control filtSearch" name="experience">
                                            <option selected disabled>Experience</option>
                                            <option>10K-20K</option>
                                            <option>10K-20K</option>
                                        </select>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <small>Page 1 of 639 jobs</small>
                        </div>
                    </div>
                    <div class="">
                        <?php for($a=0 ; $a < 5; $a++){ ?>
                            <a href="" class="viewJob">
                                <div class="dsp_P">
                                    <div class="">
                                        <h4 class="viewJobTitle">Job Title</h4>  
                                    </div>
                                    <div class="">
                                        <span class="mr-4 bookmarkIcon pointer"><i class="fas fa-bookmark"></i></span>
                                    </div>
                                </div>
                                <div class="">
                                    <h6 class="mb-0">Company Name</h6>
                                    <span class="">Address</span>
                                    <h6 class="my-2"><span>&#8377; 23000</span> - <span>&#8377; 43000</span></h6>

                                </div>
                                <div class="">
                                    <h6><strong>Requirements</strong></h6>
                                    <span>Total Work : 5 Years</span>

                                    <p>
                                        Description
                                    </p>
                                </div>
                                <div class="">
                                    <small>30+ days ago</small>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="resumeSh">
                    <div class="viewDet stickyRes">
                        <div class="viewTopHed">
                           <div class="dsp_P">
                                <h4 class="viewJobTitle">Title</h4>
                                <span class="mr-4 bookmarkIcon pointer"><i class="fas fa-bookmark"></i></span>
                           </div>
                            <h6>Company Name </h6>
                            <ul class="details_jon">
                                <li>
                                    <small>1 to 3 years</small>
                                </li>
                                <li class="osl">
                                    <small>Location</small>
                                </li>
                                <li class="osl">
                                    <small>Qualification</small>
                                </li>
                            </ul>
                            <div class="">
                                <button class=" darkBtn">Apply </button>
                               
                            </div>
                        </div>
                        <div class="scrollDetails" id="style-3">
                            <div class="">
                                <p>
                                    We are an engineering firm looking for someone to work on our Laravel PHP based program that manages timesheets, work details, etc. Our current application was used to manage 150 peoples data and needs to be scaled up to be able to
                                    handle 5000 people.
                                </p>
                                <p>Software developer with 5 years of work experience working on ERP or SAAS applications is a must. You will be asked to help us find the limitations of our existing software then plan out and execute the upgrades.</p>
                                <p>Some of your day to day tasks will be:</p>
                                <ul>
                                    <li>Create and maintain features list based on business need</li>
                                    <li>Lead daily standup meetings to discuss coding progress</li>
                                    <li>Write code and participate in code reviews</li>
                                    <li>Ensure all components are tested thoroughly, maintain staging site</li>
                                    <li>Have a willing attitude ready to take on new challenges</li>
                                </ul>
                                <p>
                                    As you can see from the list of daily activities, they are all technical in nature and varied in job type. We are a distributed team working remotely so you must be self motivated because you will not have a direct manager to
                                    monitor you.
                                </p>
                                <p>If you have worked as a software engineer and specifically as a Laravel PHP developer then you will be a good fit for this role.</p>
                                <p>These are some of prerequisites for this job</p>
                                <ul>
                                    <li>You should have 5 years of programming experience</li>
                                    <li>Knowledge of Laravel PHP is a must</li>
                                    <li>Knowledge of AWS is a big plus</li>
                                    <li>A good eye for design is a plus</li>
                                    <li>Knowledge of big data management is a plus</li>
                                    <li>Be ready to work 2 to 3 days remotely</li>
                                </ul>
                                <p>Job Type: Full-time</p>
                                <p>Pay: ₹65,000.00 - ₹75,000.00 per month</p>
                                <p>
                                    COVID-19 considerations:<br />
                                    You will be working remotely.
                                </p>
                                <p>Experience:</p>
                                <ul>
                                    <li>total work: 5 years (Required)</li>
                                </ul>
                                <p>Education:</p>
                                <ul>
                                    <li>Bachelor's (Required)</li>
                                </ul>
                                <p>Work Remotely:</p>
                                <ul>
                                    <li>Yes, always</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>