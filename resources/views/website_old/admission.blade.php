@extends('website.layouts.app')
@section('header')
@include('website.include.header')
@endsection
@section('body')
@include('website.include.body')
@endsection
@section('sidebar')
@include('website.include.sidebar')
@endsection
@section('content') 

<?php
$college=DB::table('colleges')->get();
?>

<?php
$course=DB::table('course')->get();
?>
  <!-- Page Header Section Start -->
  <section id="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Admission</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Admission</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================admission area============== -->
           <section id="faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <small class="small-primary">Admission</small>
                            <h2>Our Admission Process</h2>
                            <p>We’re committed to education exellence</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="faq-featured-image">
                            <img src="{{asset('public/website')}}/assets/img/faq/admission.jpg" style="height: 600px;" alt="">
                        </div>
                    </div>

                    <div class="col-md-8">
                       <!--  <ul class="about-three__point">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Admission process to be published soon.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>You can download our brochure and form for respective colleges</p>
                                    </div>
                                </li>
                        </ul> -->
                        <form class="form-primary" action="{{route('admission_insert')}}" method="POST" >
                            @csrf
                            <div class="row mb-3">
                                <h2 class="formtdnt_hdngtext">Personal Information</h2>
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                                </div>
                           
                                <div class="col">
                                    <input type="text" name="date_of_birth" class="form-control" placeholder="Date of Birth*" required>
                                </div>

                                      <div class="col">
                                    <input type="text" name="emailid" class="form-control" placeholder="Email id*" required>
                                </div>
                             
                                <div class="col">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number*" required>
                                </div>
                            </div>

                             <div class="row mb-3">
                          
                                <div class="col mb-3">
                                    <input type="text" name="father_name" class="form-control" placeholder="Father's Name*" required>
                                </div>
                               
                                <div class="col mb-3">
                                    <input type="text" name="father_occupation" class="form-control" placeholder="Father's Occupation*" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="full_address" class="form-control" placeholder="Enter Your Full Address*" required>
                                </div>


                            </div>


                             <div class="row mb-3">
                                      <h2 class="formtdnt_hdngtext">Qualification Information</h2>
                                <div class="col">
                                    <input type="text" name="10th_calss_board" class="form-control" placeholder="10th Class Board*" required >
                                </div>
                               
                                <div class="col">
                                    <input input type="number" id="fullMarks" name="10thfullMarks" class="form-control" placeholder="Full Marks*" required>
                                </div>

                                <div class="col">
                                    <input type="number" id="obtainedMarks" name="10thobtainedMarks" class="form-control" placeholder="Obtained Marks*" required>
                                </div>


                                <div class="col">
                                    <input type="text" id="percentage" name="10thpercentage" readonly class="form-control" placeholder="Percentage*" readonly>
                                </div>


                            </div>

                             <div class="row mb-3">
                                     
                                <div class="col">
                                    <input type="text" name="12th_calss_board" class="form-control" placeholder="12th Class Board*" required >
                                </div>
                               
                                <div class="col">
                                    <input input type="number" id="fullMarks2" name="12thfullMarks" class="form-control" placeholder="Full Marks*" required>
                                </div>

                                <div class="col">
                                    <input type="number" id="obtainedMarks2" name="12thobtainedMarks" class="form-control" placeholder="Obtained Marks*" required>
                                </div>


                                <div class="col">
                                    <input type="text" id="percentage2" name="12thpercentage" readonly class="form-control" placeholder="Percentage*" readonly>
                                </div>
                            </div>

                                       <div class="row mb-3">
                                          <h2 class="formtdnt_hdngtext">12th Class Subject's List </h2>
                                <div class="col">
                                    <input type="text" name="subject1" class="form-control" placeholder="Subject 1*" required >
                                </div>
                               
                                <div class="col">
                                    <input input type="text" id="" name="subject2" class="form-control" placeholder="Subject 2*" required>
                                </div>

                                <div class="col">
                                    <input type="text" id="" name="subject3" class="form-control" placeholder="Subject 3*" required>
                                </div>


                                <div class="col">
                                    <input type="text" id="" name="subject4"  class="form-control" placeholder="Subject 4*" required>
                                </div>

                                  <div class="col">
                                    <input type="text" id="" name="subject5" class="form-control" placeholder="Subject 5*" required>
                                </div>


                                <div class="col">
                                    <input type="text" id="" name="subject6"  class="form-control" placeholder="Subject 6*" required>
                                </div>
                            </div>


                            <div class="row mb-3">

                                <h2 class="formtdnt_hdngtext">Applying For Course </h2>
                                <!-- <div class="col">
                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone (Optional)">
                                </div> -->
                                <div class="col">
                                    <select class="form-control select2" name="college" id="college_dropdown" required>
                                       <option>Select College *</option> 
                                       @if(isset($college))
                                       @foreach($college as $college)
                                       <option value="{{$college->id}}">{{$college->college_name}}</option>
                                       @endforeach
                                       @endif
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control select2" name="course" id="course_dropdown" >
                                      
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <textarea name="message" class="form-control" placeholder="Insert Message*"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input name="submit" type="submit" class="btn button-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================admission area============== -->
        
        <!-- =========================others institute=================== -->
             <div class="container">
                  <div class="row">
                       <div class="col-lg-12 others_instituteoutsection">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="section-header">
                                        <h2>Other Institutes</h2>
                                    </div>
                                </div>
                            </div>
                            <section class="customer-logos slider">
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-1.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-2.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-3.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-4.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-5.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-6.png">
                              </div>
                           </section>
                       </div>
                  </div>
             </div>
        <!-- =========================others institute=================== -->




@endsection
@section('footer')

@include('website.include.footer')
<script>
    // Get references to the input elements
    const fullMarksInput = document.getElementById('fullMarks');
    const obtainedMarksInput = document.getElementById('obtainedMarks');
    const percentageInput = document.getElementById('percentage');

    // Add an event listener to listen for changes in fullMarks and obtainedMarks
    fullMarksInput.addEventListener('input', calculatePercentage);
    obtainedMarksInput.addEventListener('input', calculatePercentage);

    // Function to calculate the percentage
    function calculatePercentage() {
        const fullMarks = parseFloat(fullMarksInput.value);
        const obtainedMarks = parseFloat(obtainedMarksInput.value);

        if (!isNaN(fullMarks) && !isNaN(obtainedMarks)) {
            const percentage = (obtainedMarks / fullMarks) * 100;
            percentageInput.value = percentage.toFixed(2) + '%';
        } else {
            percentageInput.value = '';
        }
    }
</script>

<script>
    // Get references to the input elements
    const fullMarks2Input = document.getElementById('fullMarks2');
    const obtainedMarks2Input = document.getElementById('obtainedMarks2');
    const percentage2Input = document.getElementById('percentage2');

    // Add an event listener to listen for changes in fullMarks2 and obtainedMarks2
    fullMarks2Input.addEventListener('input', calculatepercentage2);
    obtainedMarks2Input.addEventListener('input', calculatepercentage2);

    // Function to calculate the percentage2
    function calculatepercentage2() {
        const fullMarks2 = parseFloat(fullMarks2Input.value);
        const obtainedMarks2 = parseFloat(obtainedMarks2Input.value);

        if (!isNaN(fullMarks2) && !isNaN(obtainedMarks2)) {
            const percentage2 = (obtainedMarks2 / fullMarks2) * 100;
            percentage2Input.value = percentage2.toFixed(2) + '%';
        } else {
            percentage2Input.value = '';
        }
    }
</script>

<script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#college_dropdown').on('change', function () {
                var idCategory = this.value;
                //console.log(idCategory);
                $("#course_dropdown").html('');
                $.ajax({
                    url: "{{url('/coursefetch')}}",
                    type: "POST",
                    data: {
                     idCategory: idCategory,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#course_dropdown').html('<option value="">-- Select Course  --</option>');
                        $.each(result.course, function (key, value) {
                            $("#course_dropdown").append('<option value="' + value
                                .id + '">' + value.course_name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });
  
        
            
  
        });
</script>
@endsection
         