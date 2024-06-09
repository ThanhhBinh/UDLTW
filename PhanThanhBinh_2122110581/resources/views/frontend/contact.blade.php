@extends('layouts.site')
@section('title','Liên hệ')
@section('content')
<div>
    <main class="main_contact">
        <section class="contact">
          <h1 class="heading_contact">Liên hệ với chúng tôi</h1>
          <div class="shopee-form-container">
            <input
              required=""
              type="text"
              id="contactFormName"
              class="form-control input-lg"
              name="contact[name]"
              placeholder="Tên của bạn"
              autocapitalize="words"
              value=""
            />
            <input
              required=""
              type="text"
              id="contactFormPhone"
              class="form-control input-lg"
              name="contact[phone]"
              placeholder="Số điện thoại của bạn"
              autocapitalize="words"
              value=""
            />
            <input
              required=""
              type="email"
              name="contact[email]"
              placeholder="Email của bạn"
              id="contactFormEmail"
              class="form-control input-lg"
              autocapitalize="off"
              value=""
            />
            <textarea
              required=""
              rows="6"
              name="contact[body]"
              class="form-control"
              placeholder="Viết bình luận"
              id="contactFormMessage"
            ></textarea>
            <button
              type="submit"
              class="btn btn-outline insButton"
              title="Gửi thông tin"
            >
              Gửi thông tin
            </button>
          </div>
          <div class="page-about-new-contact-map pt-5 custom-map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6177130569445!2d106.6541090152164!3d10.763917262366853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eec413c9d8d%3A0xfd53ac27a1acd021!2zMTgyIMSQLiBMw6ogxJDhuqFpIEjDoG5oLCBQaMaw4budbmcgMTUsIFF14bqtbiAxMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1666321027665!5m2!1svi!2s"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            >
            </iframe>
          </div>
        </section>
      </main>
</div>
@endsection