
                            // This example displays an address form, using the autocomplete feature
                            // of the Google Places API to help users fill in the information.

                            // This example requires the Places library. Include the libraries=places
                            // parameter when you first load the API. For example:
                            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                            var placeSearch, autocomplete;
                            var componentForm = {
                                street_number: 'short_name',
                                route: 'long_name',
                                locality: 'long_name',
                                administrative_area_level_1: 'short_name',
                                country: 'long_name',
                                postal_code: 'short_name'
                            };

                            function initAutocomplete() {
                                // Create the autocomplete object, restricting the search to geographical
                                // location types.
                                autocomplete = new google.maps.places.Autocomplete(
                                        /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                                        {types: ['geocode'],
                                        componentRestrictions: {country: "IN"}
                                        });
                                

                                
                                // When the user selects an address from the dropdown, populate the address
                                // fields in the form.
                                autocomplete.addListener('place_changed', fillInAddress);
                            }

                            function fillInAddress() {
                                // Get the place details from the autocomplete object.
                                var place = autocomplete.getPlace();

                                for (var component in componentForm) {
                                    document.getElementById(component).value = '';
                                    document.getElementById(component).disabled = false;
                                }

                                // Get each component of the address from the place details
                                // and fill the corresponding field on the form.
                                for (var i = 0; i < place.address_components.length; i++) {
                                    var addressType = place.address_components[i].types[0];
                                    if (componentForm[addressType]) {
                                        var val = place.address_components[i][componentForm[addressType]];
                                        document.getElementById(addressType).value = val;
                                    }
                                }
                            }

                            // Bias the autocomplete object to the user's geographical location,
                            // as supplied by the browser's 'navigator.geolocation' object.
                            function geolocate() {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        var geolocation = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude
                                        };
                                        var circle = new google.maps.Circle({
                                            center: geolocation,
                                            radius: position.coords.accuracy
                                        });
                                        autocomplete.setBounds(circle.getBounds());
                                    });
                                }
                            }
                            function getLocation() {
                                $("#loader").show();
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(savePosition, positionError, {timeout: 10000});
                                } else {
                                    //Geolocation is not supported by this browser
                                }
                            }

                            // handle the error here
                            function positionError(error) {
                                var errorCode = error.code;
                                var message = error.message;

                                alert(message);
                            }

                            function savePosition(position) {

                                $.ajax({
                                    type: "POST",
                                    url: "function/geocoordinates",
                                    data: {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude
                                    },
                                    success: function (res) {
                                        var msgtype = res.trim();
                                        $('#autocomplete').val(msgtype);
                                        $("#loader").hide();
                                    }
                                });
                            }
                            jQuery().ready(function () {
                                /* Custom select design */
                                jQuery('.drop-down').append('<div class="button"></div>');
                                jQuery('.drop-down').append('<ul class="select-list"></ul>');
                                jQuery('.drop-down select option').each(function () {
                                    var bg = jQuery(this).css('background-image');
                                    jQuery('.select-list').append('<li class="clsAnchor"><span value="' + jQuery(this).val() + '" class="' + jQuery(this).attr('class') + '" style=background-image:' + bg + '>' + jQuery(this).text() + '</span></li>');
                                });
                                jQuery('.drop-down .button').html('<span style=background-image:' + jQuery('.drop-down select').find(':selected').css('background-image') + '>' + jQuery('.drop-down select').find(':selected').text() + '</span>' + '<a href="javascript:void(0);" class="select-list-link">Arrow</a>');
                                jQuery('.drop-down ul li').each(function () {
                                    if (jQuery(this).find('span').text() == jQuery('.drop-down select').find(':selected').text()) {
                                        jQuery(this).addClass('active');
                                    }
                                });
                                jQuery('.drop-down .select-list span').on('click', function ()
                                {
                                    var dd_text = jQuery(this).text();
                                    var dd_img = jQuery(this).css('background-image');
                                    var dd_val = jQuery(this).attr('value');
                                    jQuery('.drop-down .button').html('<span style=background-image:' + dd_img + '>' + dd_text + '</span>' + '<a href="javascript:void(0);" class="select-list-link">Arrow</a>');
                                    jQuery('.drop-down .select-list span').parent().removeClass('active');
                                    jQuery(this).parent().addClass('active');
                                    $('.drop-down select[name=options]').val(dd_val);
                                    $('.drop-down .select-list li').slideUp();
                                });
                                jQuery('.drop-down .button').on('click', 'a.select-list-link', function ()
                                {
                                    jQuery('.drop-down ul li').slideToggle();
                                });
                                /* End */
                            });
