
{{-- coding by asad shabbir --}}
{{-- <div>
   <h1>add new student</h1>
   <form action="{{ route('add4') }}"  method="post">
    @csrf

    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="text" name="email" placeholder="Enter your email"><br><br>
    <input type="text" name="phone" placeholder="Enter ypur phone"><br><br>
    <button>Add Student</button>
   </form>
</div> --}}

{{-- upper code is edit  --}}


 {{-- add-student41.blade.php= --}}<style>
  :root{
    --bg1:#6a11cb;
    --bg2:#2575fc;
    --glass: rgba(255,255,255,.14);
    --border: rgba(255,255,255,.22);
    --muted: rgba(255,255,255,.85);
  }

  .student-page{
    min-height: 100vh;
    display: grid;
    place-items: center;
    padding: 28px 14px;
    background:
      radial-gradient(1200px 500px at 10% 10%, rgba(255,255,255,.25), transparent 60%),
      radial-gradient(900px 380px at 90% 30%, rgba(0,0,0,.18), transparent 60%),
      linear-gradient(135deg, var(--bg1), var(--bg2));
    font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
    color: #fff;
  }

  .wrap{ width: min(620px, 100%); }

  /* top nav buttons */
  .top-actions{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    justify-content:flex-end;
    margin-bottom: 14px;
  }

  .btn-link{
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:10px 14px;
    border-radius: 14px;
    font-weight: 900;
    letter-spacing:.2px;
    border: 1px solid rgba(255,255,255,.25);
    background: rgba(255,255,255,.12);
    color:#fff;
    transition: .18s ease;
    box-shadow:
      0 10px 30px rgba(0,0,0,.22),
      inset 0 1px 0 rgba(255,255,255,.18);
  }
  .btn-link:hover{ transform: translateY(-1px); background: rgba(255,255,255,.16); }

  /* 3D Card */
  .student-card{
    position: relative;
    background: var(--glass);
    border: 1px solid var(--border);
    border-radius: 22px;
    padding: 24px 22px;
    box-shadow:
      0 25px 70px rgba(0,0,0,.35),
      inset 0 1px 0 rgba(255,255,255,.18);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    transform-style: preserve-3d;
    transition: transform .25s ease, box-shadow .25s ease;
    overflow: hidden;
  }

  .student-card::before{
    content:"";
    position:absolute;
    inset:-2px;
    background: radial-gradient(600px 240px at 20% 10%, rgba(255,255,255,.25), transparent 55%),
                radial-gradient(500px 220px at 90% 40%, rgba(255,255,255,.12), transparent 60%);
    pointer-events:none;
  }

  .student-card:hover{
    transform: perspective(900px) rotateX(3deg) rotateY(-3deg) translateY(-2px);
    box-shadow:
      0 35px 90px rgba(0,0,0,.42),
      inset 0 1px 0 rgba(255,255,255,.20);
  }

  .student-title{
    margin: 0 0 6px;
    font-size: 28px;
    font-weight: 950;
  }

  .student-subtitle{
    margin: 0 0 16px;
    color: var(--muted);
    font-size: 14px;
  }

  .alert{
    padding: 12px 14px;
    border-radius: 14px;
    margin-bottom: 14px;
    border: 1px solid rgba(255,255,255,.22);
    background: rgba(255,255,255,.12);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.18);
    font-weight: 800;
  }
  .alert-success{ border-color: rgba(34,197,94,.45); background: rgba(34,197,94,.16); }
  .alert-error{ border-color: rgba(239,68,68,.45); background: rgba(239,68,68,.16); }

  .grid{ display:grid; gap: 12px; }

  .field label{
    display:block;
    font-size: 13px;
    margin-bottom: 6px;
    color: rgba(255,255,255,.92);
  }

  .input{
    width: 100%;
    padding: 12px 14px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.26);
    background: rgba(255,255,255,.10);
    color: #fff;
    outline: none;
    transition: .2s ease;
    box-shadow: inset 0 1px 0 rgba(255,255,255,.12);
  }

  .input::placeholder{ color: rgba(255,255,255,.75); }

  .input:focus{
    border-color: rgba(255,255,255,.55);
    box-shadow: 0 0 0 4px rgba(255,255,255,.14), inset 0 1px 0 rgba(255,255,255,.12);
    transform: translateY(-1px);
  }

  .error{
    margin-top: 6px;
    display: block;
    font-size: 12px;
    color: #ffe3e3;
    font-weight: 700;
  }

  .actions{
    display:flex;
    gap:10px;
    margin-top: 6px;
  }

  .btn{
    flex: 1;
    border: 0;
    border-radius: 14px;
    padding: 12px 16px;
    font-weight: 950;
    cursor: pointer;
    color: #0b1220;
    background: linear-gradient(135deg, #ffffff, #d7e7ff);
    box-shadow:
      0 14px 30px rgba(0,0,0,.24),
      inset 0 1px 0 rgba(255,255,255,.7);
    transition: .18s ease;
  }
  .btn:hover{ transform: translateY(-1px); }
  .btn:active{ transform: translateY(1px); box-shadow: 0 8px 18px rgba(0,0,0,.22), inset 0 1px 0 rgba(255,255,255,.6); }

  .btn-secondary{
    flex: 1;
    border-radius: 14px;
    padding: 12px 16px;
    font-weight: 950;
    cursor: pointer;
    color: #fff;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.25);
    box-shadow: 0 12px 26px rgba(0,0,0,.18), inset 0 1px 0 rgba(255,255,255,.18);
    transition: .18s ease;
  }
  .btn-secondary:hover{ transform: translateY(-1px); }
</style>

<div class="student-page">
  <div class="wrap">

    {{-- Top Buttons --}}
    <div class="top-actions">
      <a class="btn-link" href="{{ route('add41') }}">+ Add Student</a>
      <a class="btn-link" href="{{ route('list42') }}">Show Student List</a>
    </div>

    <div class="student-card">
      <h1 class="student-title">Add New Student</h1>
      <p class="student-subtitle">Please fill the details below.</p>

      {{-- Optional: if you ever redirect back with success/error --}}
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
      @endif

      <form action="{{ route('add4') }}" method="post" class="grid">
        @csrf

        <div class="field">
          <label for="name">Student Name</label>
          <input id="name" class="input" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name">
          @error('name') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="field">
          <label for="email">Email Address</label>
          <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
          @error('email') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="field">
          <label for="phone">Phone Number</label>
          <input id="phone" class="input" type="text" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone">
          @error('phone') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="actions">
          <button type="submit" class="btn">Add Student</button>
          <button type="reset" class="btn-secondary">Clear</button>
        </div>
      </form>
    </div>
  </div>
</div>