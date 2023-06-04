@extends('home.layouts.app')

@section('section')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Farms</h2>
                        {{-- <div class="bt-option">
                            <a href="{{./home.html}}">Home</a>
                            <span>Farms</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="img/room/room-details.jpg" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{ $farm->title }}</h3>
                                {{-- <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#">Booking Now</a>
                                </div> --}}
                            </div>
                            <h2>{{ $farm->price }}$<span>/Pernight</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Guests</td>
                                        <td>Max persion {{ $farm->num_guests }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bedrooms:</td>
                                        <td>{{ $farm->num_bedrooms }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{ $farm->num_beds }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">
                                {{ $farm->description }} <td>{{ $farm->num_beds }}</td>
                            </p>
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            @foreach ($comments as $comment)
                                <div class="ri-pic">
                                    <img src="img/avatar/avatar-1.png" alt="">
                                </div>
                                <div class="ri-text">
                                    <span>{{ $comment->created_at->format('M d, Y') }}</span>
                                    <div class="rating">
                                        @for ($i = 0; $i < $comment->rating; $i++)
                                            <i class="icon_star"></i>
                                        @endfor
                                    </div>
                                    <h5>{{ $comment->user->name }}</h5>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="review-add">
                        <h4>Add Review</h4>
                        <form class="ra-form" action="#">
                            <div class="row">
                                <input type="hidden" value="{{ $farm->id }}" name="farm_id">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div class="rating">
                                        <div class="rate">
                                            <input type="radio" id="star5" class="rate" name="rating"
                                                value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" checked id="star4" class="rate" name="rating"
                                                value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" class="rate" name="rating"
                                                value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" class="rate" name="rating"
                                                value="2">
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" class="rate" name="rating"
                                                value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        <form action="{{ route('submit.appointment') }}" method="POST">
                            @csrf
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in" name="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out" name="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <button type="submit"  data-toggle="modal"
                            data-target="#exampleModalCenter">Check Availability</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="map">
                        <div class="map-inner">
                            <table style="border: 5px solid #222736;" cellspacing="0" cellpadding="10">
                                <tr>
                                    <td style="width: 450px; height:450px;">
                                        <iframe
                                            src='https://www.google.com/maps?q=<?php echo 32.0448774; ?>,<?php echo 35.7079124; ?>&hl=es;z=14&output=embed'
                                            style="width:100%; height:100%"></iframe>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->


    <!-- booking scripts -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var bookedAppointments = [
                @foreach ($bookedAppointments as $appointment)
                    {
                        from: new Date("{{ $appointment->check_in }}"),
                        to: new Date("{{ $appointment->check_out }}")
                    },
                @endforeach
            ];

            var dateInPicker = flatpickr("#date-in", {
                minDate: "today",
                disable: bookedAppointments,
                onChange: function(selectedDates, dateStr, instance) {
                    var selectedDate = selectedDates[0];
                    var nearestAppointment = getNearestAppointment(selectedDate);
                    if (nearestAppointment) {
                        dateOutPicker.set("maxDate", nearestAppointment.from);
                        dateOutPicker.set("minDate", selectedDate);
                    } else {
                        dateOutPicker.set("maxDate", null);
                        dateOutPicker.set("minDate", selectedDate);
                    }
                }
            });

            var dateOutPicker = flatpickr("#date-out", {
                minDate: "today",
                disable: bookedAppointments,
                onChange: function(selectedDates, dateStr, instance) {
                    var selectedDate = selectedDates[0];
                    var nearestAppointment = getNearestAppointment(selectedDate);
                    if (nearestAppointment) {
                        dateInPicker.set("maxDate", nearestAppointment.to);
                        dateInPicker.set("minDate", null);
                    } else {
                        dateInPicker.set("maxDate", null);
                        dateInPicker.set("minDate", null);
                    }
                }
            });

            // Function to find the nearest appointment based on the selected date
            function getNearestAppointment(selectedDate) {
                var nearestAppointment = null;

                for (var i = 0; i < bookedAppointments.length; i++) {
                    var appointment = bookedAppointments[i];
                    if (appointment.from <= selectedDate && selectedDate <= appointment.to) {
                        if (!nearestAppointment || appointment.to < nearestAppointment.to) {
                            nearestAppointment = appointment;
                        }
                    }
                }

                return nearestAppointment;
            }

            // Update checkout date picker based on selected check-in date
            dateInPicker.config.onChange.push(function(selectedDates, dateStr, instance) {
                var selectedDate = selectedDates[0];
                var nextAppointment = getNextAppointment(selectedDate);
                if (nextAppointment) {
                    var nextCheckIn = nextAppointment.from;
                    var nextCheckOut = nextAppointment.to;
                    dateOutPicker.set("maxDate", nextCheckIn);
                    dateOutPicker.set("minDate", selectedDate);
                }
            });

            // Function to find the next appointment after the selected date
            function getNextAppointment(selectedDate) {
                var nextAppointment = null;

                for (var i = 0; i < bookedAppointments.length; i++) {
                    var appointment = bookedAppointments[i];
                    if (appointment.from > selectedDate) {
                        if (!nextAppointment || appointment.from < nextAppointment.from) {
                            nextAppointment = appointment;
                        }
                    }
                }

                return nextAppointment;
            }
        });
    </script>

    {{-- map script --}}
    <script type="text/javascript">
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            }
        }

        function showPosition(position) {
            document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
            document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("You Must Allow The Request For Geolocation To Fill Out The Form");
                    location.reload();
                    break;
            }
        }
    </script>



    <!-- Js Plugins -->
    <script src="{{ url('home/js/bootstrap.min.js') }}">
        < /scrip> <
        script src = "{{ url('home/js/jquery-3.3.1.min.js') }}" > < /> <
        script src = "{{ url('home/js/jquery.magnific-popup.min.js') }}" >
    </script>
    <script src="{{ url('home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('home/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('home/js/jquery.slicknav.js') }}"></script>
    <script src="{{ url('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('home/js/main.js') }}"></script>
@endsection
