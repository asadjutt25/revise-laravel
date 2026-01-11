{{-- <div>
   <h1>student list</h1>

  
   <table border="2">
   <tr>
    <td>ID#</td>
    <td>Name</td>
    <td>Gmail</td>
    <td>phone</td>
    <td>Created at</td>
    <td>Updated at</td>
   </tr>
@foreach($student41 as $student4)
 <tr>
         <td>{{ $student4->id}}</td>
         <td>{{ $student4->name}}</td>
         <td>{{ $student4->email}}</td>
         <td>{{ $student4->phone}}</td>
         <td>{{ $student4->created_at}}</td>
         <td>{{ $student4->updated_at}}</td>
    </tr>
@endforeach
   </table>
</div> --}}


{{-- list-student42.blade.php= --}}<style>
  :root{
    --bg1:#6a11cb;
    --bg2:#2575fc;
    --glass: rgba(255,255,255,.14);
    --border: rgba(255,255,255,.22);
  }

  .student-page{
    min-height: 100vh;
    padding: 28px 14px;
    background:
      radial-gradient(1200px 500px at 10% 10%, rgba(255,255,255,.25), transparent 60%),
      radial-gradient(900px 380px at 90% 30%, rgba(0,0,0,.18), transparent 60%),
      linear-gradient(135deg, var(--bg1), var(--bg2));
    font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
    color: #fff;
  }

  .student-wrap{ width: min(1100px, 100%); margin: 0 auto; }

  .header{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap: 12px;
    margin-bottom: 14px;
    flex-wrap: wrap;
  }

  .title{ margin: 0; font-size: 28px; font-weight: 950; letter-spacing: .2px; }
  .subtitle{ margin: 6px 0 0; opacity: .9; font-size: 14px; }

  .top-actions{ display:flex; gap:10px; flex-wrap:wrap; }

  .btn-link{
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:10px 14px;
    border-radius: 14px;
    font-weight: 900;
    border: 1px solid rgba(255,255,255,.25);
    background: rgba(255,255,255,.12);
    color:#fff;
    transition: .18s ease;
    box-shadow:
      0 10px 30px rgba(0,0,0,.22),
      inset 0 1px 0 rgba(255,255,255,.18);
  }
  .btn-link:hover{ transform: translateY(-1px); background: rgba(255,255,255,.16); }

  .alert{
    padding: 12px 14px;
    border-radius: 14px;
    margin: 0 0 14px;
    border: 1px solid rgba(255,255,255,.22);
    background: rgba(255,255,255,.12);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.18);
    font-weight: 800;
  }
  .alert-success{ border-color: rgba(34,197,94,.45); background: rgba(34,197,94,.16); }
  .alert-error{ border-color: rgba(239,68,68,.45); background: rgba(239,68,68,.16); }

  /* 3D Card */
  .card{
    position: relative;
    background: var(--glass);
    border: 1px solid var(--border);
    border-radius: 22px;
    padding: 16px;
    box-shadow:
      0 25px 70px rgba(0,0,0,.35),
      inset 0 1px 0 rgba(255,255,255,.18);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    overflow: hidden;
    transform-style: preserve-3d;
  }

  .card::before{
    content:"";
    position:absolute;
    inset:-2px;
    background: radial-gradient(700px 260px at 15% 0%, rgba(255,255,255,.22), transparent 55%),
                radial-gradient(600px 240px at 95% 30%, rgba(255,255,255,.12), transparent 60%);
    pointer-events:none;
  }

  .table-scroll{ overflow:auto; border-radius: 16px; }

  table{
    width: 100%;
    border-collapse: collapse;
    min-width: 880px;
  }

  thead th{
    text-align: left;
    font-size: 12px;
    letter-spacing: .4px;
    text-transform: uppercase;
    padding: 14px;
    background: rgba(255,255,255,.14);
    border-bottom: 1px solid rgba(255,255,255,.22);
    position: sticky;
    top: 0;
    backdrop-filter: blur(10px);
  }

  tbody td{
    padding: 14px;
    border-bottom: 1px solid rgba(255,255,255,.14);
    font-size: 14px;
  }

  tbody tr{ transition: .18s ease; }
  tbody tr:hover{ background: rgba(215, 238, 10, 0.1); transform: translateY(-1px); }

  .badge{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding: 6px 10px;
    border-radius: 999px;
    font-weight: 950;
    font-size: 12px;
    background: rgba(255,255,255,.16);
    border: 1px solid rgba(255,255,255,.22);
  }

  .empty{ padding: 22px; text-align:center; opacity:.95; }

  @media (max-width: 640px){
    .title{ font-size: 24px; }
    table{ min-width: 820px; }
  }
</style>

<div class="student-page">
  <div class="student-wrap">

    <div class="header">
      <div>
        <h1 class="title">Student List</h1>
        <p class="subtitle">All registered students shown below.</p>
      </div>

      {{-- Top Buttons --}}
      <div class="top-actions">
        <a class="btn-link" href="{{ route('add41') }}">+ Add Student</a>
        <a class="btn-link" href="{{ route('list42') }}">Show Student List</a>
      </div>
    </div>

    {{-- Success/Error Message (Add ke baad yahan show hoga) --}}
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    <div class="card">
      <div class="table-scroll">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Created</th>
              <th>Updated</th>
            </tr>
          </thead>

          <tbody>
            @forelse($student41 as $student4)
              <tr>
                <td><span class="badge">#{{ $student4->id }}</span></td>
                <td>{{ $student4->name }}</td>
                <td>{{ $student4->email }}</td>
                <td>{{ $student4->phone }}</td>
                <td>{{ $student4->created_at }}</td>
                <td>{{ $student4->updated_at }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="empty">No students found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>