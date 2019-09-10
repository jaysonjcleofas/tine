<section class="section py-5" id="YourResponse">
    <h2 class="mt-3 mb-5 h3 text-center wow fadeIn section-heading">Your Response</h2>
    <p class="text-center mb-3 wow fadeIn" data-wow-delay="0.2s">Please fill out the form.</p>
    <div class="row">
        <div class="col-lg-6 mx-auto wow fadeIn">

            <form class="mx-5" style="color: #757575;" action="{{ route('response.store') }}" method="POST">
                @csrf
                <div class="md-form mt-0">
                    <input type="text" id="name" name="name" class="form-control" required>
                    <label for="name">Name</label>
                </div>

                <div class="md-form mt-0">
                    <input type="text" id="contact" name="contact" class="form-control" required>
                    <label for="contact">Contact</label>
                </div>

                <label for=""><strong>Response</strong></label>
                <br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="materialInline1" value="yes"
                        name="response" required>
                    <label class="form-check-label" for="materialInline1">We'll be there!</label>
                </div>

                <!-- Material inline 2 -->
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="materialInline2" value="no"
                        name="response" required>
                    <label class="form-check-label" for="materialInline2">We can't make it!</label>
                </div>

                <div class="md-form">
                    <textarea id="note" name="note" class="md-textarea form-control" rows="3"></textarea>
                    <label for="note">Send a note</label>
                </div>

                <!-- Sign up button -->
                <button class="btn btn-elegant btn-rounded btn-block my-4 waves-effect z-depth-0"
                    type="submit">Submit</button>

            </form>
            <!-- Form -->
        </div>
    </div>
</section>
