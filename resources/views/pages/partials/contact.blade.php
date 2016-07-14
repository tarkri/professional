<div id="contact" class="page-section">
        <div class="container">
            <form action="{{ URL::to('contact') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Contact Tarun</h1>
                <p class="status ready"><strong>Availibility</strong>: Tarun is currently available for individual projects and collaborations.</p>
                <div class="row">
                    <div class="six columns">
                        <label for="">Your Name</label>
                        <input type="text" name="name" class="u-full-width">
                    </div>
                    <div class="six columns">
                        <label for="">Your Email</label>
                        <input type="text" name="email" class="u-full-width">
                    </div>
                    <div class="twelve columns">
                        <label for="">Type of Project/Request</label>
                        <select name="type_request" id="type_request" class="u-full-width">
                            <option value="">Please Choose</option>
                            <option value="Website Design">Website Design</option>
                            <option value="Web Application Development">Web Application Development</option>
                            <option value="Illustration">Illustration</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="twelve columns">
                        <label for="">Comment/Message</label>
                        <textarea name="comment" id="comment" cols="30" rows="10" class="u-full-width"></textarea>
                    </div>
                    <div class="twelve columns">
                        <input type="submit" class="button-primary" value="Submit">
                    </div>
                </div>
            </form>
        </div>
</div>