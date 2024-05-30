@extends('template.index')
@section('content')
{{-- <div class="container-fluid">
    <div class="container-fluid lg-4">
      <div class="card">
        <h1 style="padding: 10px; text-align: center; background-color: silver; border-radius: 4px">Konseling Permasalahan</h1>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <img src="{{url('/assets')}}/images/products/s4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Videotron Samsung</h5>
                  <p class="card-text">Videotron Samsung Seri Terbaru.</p>
                  <a href="#" class="btn btn-primary">Pinjam</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <img src="{{url('/assets')}}/images/products/s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Proyektor Infocus</h5>
                  <p class="card-text">Proyektor Infocus Seri Terbaru.</p>
                  <a href="#" class="btn btn-primary">Pinjam</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <img src="{{url('/assets')}}/images/products/s7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">HDMI Converter</h5>
                  <p class="card-text">HDMI Converter Seri Terbaru.</p>
                  <a href="#" class="btn btn-primary">Pinjam</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <img src="{{url('/assets')}}/images/products/s7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">HDMI Converter</h5>
                  <p class="card-text">HDMI Converter Seri Terbaru.</p>
                  <a href="#" class="btn btn-primary">Pinjam</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <img src="{{url('/assets')}}/images/products/s7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">HDMI Converter</h5>
                  <p class="card-text">HDMI Converter Seri Terbaru.</p>
                  <a href="#" class="btn btn-primary">Pinjam</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <img src="{{url('/assets')}}/images/products/s7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">HDMI Converter</h5>
                  <p class="card-text">HDMI Converter Seri Terbaru.</p>
                  <a href="#" class="btn btn-primary">Pinjam</a>
                </div>
              </div>
            </div>
            {{-- <div class="col-md-4">
              <h5 class="card-title fw-semibold mb-4">Header and footer</h5>
              <div class="card">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="container">
    <h2>Schedule an Appointment Counseling</h2>
    <form action="{{ route('appointment_konselings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_name">Client Name:</label>
            <input type="text" class="form-control" id="client_name" name="client_name" required>
        </div>
        <div class="form-group">
            <label for="counselor_name">Counselor Name:</label>
            <input type="text" class="form-control" id="counselor_name" name="counselor_name" required>
        </div>
        <div class="form-group">
            <label for="appointment_time">Appointment Time:</label>
            <input type="datetime-local" class="form-control" id="appointment_time" name="appointment_time" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Cancel</button>
    </form>
</div>
  @endsection
</div>
</div>
