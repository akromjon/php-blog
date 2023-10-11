<div>
    <div class="contact_info">
        <form wire:submit.prevent="submit" class="contact_form">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row contact_fill">
                <div class="col-lg-4 form-group">
                    <h6>Full Name</h6>
                    <input type="text" class="form-control" wire:model="name" name="name" id="name"
                        placeholder="Enter your name here" required>
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 form-group">
                    <h6>Email</h6>
                    <input type="email" wire:model="email" class="form-control" name="email" id="email"
                        placeholder="{{ config('app.contact_email') }}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 form-group">
                    <h6>Subject</h6>
                    <input type="text" wire:model="subject" class="form-control" wire:model="subject" name="subject"
                        id="subject" placeholder="Subjec" required>

                    @error('subject')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-12 form-group">
                    <h6>Message</h6>
                    <textarea class="form-control message" wire:model="message" id="message" placeholder="Your message..."></textarea>
                    @error('message')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn action_btn thm_btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
