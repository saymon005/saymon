<section id="contact" class="contact_wrapper">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 order-1 order-lg-1 pe-lg-5 text-lg-start text-center">
                <span class="subtitle">Let's Say Hi</span>
                <h2>Hire Me.</h2>
                <div class="row call_details mb-4">
                    <label class="col-sm-3">Call me directly:</label>
                    <div class="col-sm-9 mb-3 mb-lg-2">
                        <a href="javascript:void(0)">+8801830939548</a>
                    </div>
                    <label class="col-sm-3">Contact Email:</label>
                    <div class="col-sm-9 mb-3 mb-lg-2">
                        <a href="mailto:msaymonislamiftikar@gmail.com">msaymonislamiftikar@gmail.com</a>
                    </div>
                </div>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Your Name..." autocomplete="off" required>
                    </div>
                    <div class="mb-4">
                        <input type="number" name="phone" class="form-control" placeholder="Your Phone..." autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Your Email..." autocomplete="off" required>
                    </div>
                    <div class="mb-4">
                        <textarea cols="40" rows="4" name="message" class="form-control" placeholder="Write a Message..." autocomplete="off" required></textarea>
                    </div>
                    <button type="submit" class="main-btn">Submit</button>
                </form>
            </div>
            
            <div class="col-lg-6 order-2 order-lg-2 text-center text-lg-start">
                <h2>Location</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.21636138281235!2d90.4145235653544!3d23.766565018833912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7810bfe3023%3A0x717aa0a1e0a17503!2sMohanagar%20Project!5e0!3m2!1sen!2sbd!4v1717737270659!5m2!1sen!2sbd"
                    width="100%" height="300" style="border:0; border-radius:8px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>