<div>
    <section class="doc_action_area_three">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="action_content">
                        <h2>Join our Newsletter For Free</h2>
                        <p>Get Regular Updates In Your Inbox</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form wire:submit.prevent="submit" class="footer_subscribe_form action_subscribe_form">
                        <div class="form-group">
                            <input class="form-control" wire:model="email" type="email" placeholder="Email Address">
                            <button class="s_btn" type="submit">Join Now <i class="arrow_right"></i></button>
                        </div>
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
