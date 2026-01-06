<div>
   {{-- <h1>upload file</h1>
   <form action="" method="post" enctype="multipart/form-data">
    @csrf
  <input type="file" name="file" id="">
<button>Upload file</button>
</form> --}}

{{-- <h1>Upload File</h1>

    <form action="/upload38" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br><br>
        <button>Upload file</button>
    </form>
</div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upload File</title>
  <style>
    :root{
      --bg: #0b1220;
      --card: rgba(255,255,255,.06);
      --muted: #9aa4b2;
      --text: #e8eef6;
      --accent: #6ee7b7;
      --accent-2: #22c55e;
      --border: rgba(255,255,255,.12);
    }
    html,body{
      height:100%; margin:0;
      font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
      color: var(--text);
      background:
        radial-gradient(1200px 600px at 10% -10%, #1b2a5b22, transparent 60%),
        radial-gradient(1000px 500px at 100% 0%, #115e5922, transparent 60%),
        linear-gradient(180deg, #0a0f1a, #0b1220 30%, #0b1220 100%);
    }
    .wrap{
      min-height:100%;
      display:grid;
      place-items:center;
      padding: 24px;
    }
    .card{
      width: min(980px, 94vw);
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 18px;
      box-shadow: 0 30px 80px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.04);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      overflow: hidden;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
    }
    @media (max-width: 860px){
      .card{ grid-template-columns: 1fr; }
    }

    .preview{
      position:relative;
      background:
        radial-gradient(120% 100% at 0% 0%, #0ea5e922, transparent 60%),
        radial-gradient(120% 100% at 100% 100%, #22c55e22, transparent 60%),
        #0d1527;
      aspect-ratio: 16/10;
    }
    .preview .skeleton{
      position:absolute; inset:0;
      background: linear-gradient(120deg, rgba(255,255,255,.05) 25%, rgba(255,255,255,.12) 50%, rgba(255,255,255,.05) 75%);
      background-size: 200% 100%;
      animation: shimmer 1.4s linear infinite;
      border-bottom: 1px solid var(--border);
    }
    .preview img{
      position:absolute; inset:0;
      width:100%; height:100%;
      object-fit: contain;
      opacity:0; transform: scale(.985);
      transition: opacity .45s ease, transform .45s ease;
    }
    .preview img.show{ opacity:1; transform: scale(1); }
    @keyframes shimmer { 0%{background-position:200% 0} 100%{background-position:-200% 0} }

    .panel{
      padding: 22px 24px 26px;
      display:flex;
      flex-direction:column;
      gap:16px;
    }
    .title{
      display:flex; align-items:center; gap:.6rem;
      font-weight:800; font-size: clamp(18px, 2.1vw, 22px);
    }
    .muted{ color: var(--muted); font-size:.92rem; }

    .dropzone{
      position:relative;
      border: 1.5px dashed var(--border);
      background: rgba(255,255,255,.04);
      border-radius: 14px;
      padding: 22px;
      text-align:center;
      transition: border-color .2s ease, background .2s ease, box-shadow .2s ease;
      cursor: pointer;
    }
    .dropzone:hover{
      background: rgba(255,255,255,.06);
      box-shadow: 0 10px 24px rgba(0,0,0,.18);
    }
    .dropzone.drag{
      border-color: #31d493;
      background: linear-gradient(135deg, rgba(49,212,147,.18), rgba(34,197,94,.10));
    }
    .hidden-input{ position:absolute; inset:0; opacity:0; width:100%; height:100%; cursor:pointer; }

    .file-name{
      margin-top:10px; color: var(--muted); font-size:.92rem;
      white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }

    .actions{
      display:flex; flex-wrap:wrap; gap:10px; margin-top:6px;
    }
    .btn{
      appearance:none; border:none; cursor:pointer;
      padding:.78rem 1.05rem; border-radius: 12px;
      font-weight:800; letter-spacing:.2px;
      display:inline-flex; align-items:center; gap:.5rem;
      transition: transform .14s ease, box-shadow .14s ease, background .2s ease, color .2s ease;
      text-decoration:none; user-select:none;
    }
    .btn:active{ transform: translateY(1px); }
    .btn-primary{
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color:#052414; box-shadow: 0 12px 26px rgba(34,197,94,.25);
    }
    .btn-primary:disabled{
      background: linear-gradient(135deg, #7ca39a, #6c8f87);
      opacity:.7; cursor:not-allowed; box-shadow:none;
    }
    .btn-outline{
      background: transparent; color: var(--text); border: 1px solid var(--border);
    }
    .btn-outline:hover{ background: rgba(255,255,255,.06); }

    @media (prefers-reduced-motion: reduce){
      .preview img{ transition:none; }
      .btn{ transition:none; }
      .dropzone{ transition:none; }
    }
  </style>
</head>
<body>

<div class="wrap">
  <form class="card" action="/upload38" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Left: Preview -->
    <div class="preview">
      <div class="skeleton" id="skel"></div>
      <img id="imgPreview" alt="Preview" />
    </div>

    <!-- Right: Controls -->
    <div class="panel">
      <div class="title">Upload File</div>
      <div class="muted">Drag & drop karein ya click karke image select karein. Sirf image files recommended.</div>

      <label id="dropzone" class="dropzone">
        <input id="fileInput" class="hidden-input" type="file" name="file" accept="image/*" required />
        <div>
          <div style="font-weight:700; margin-bottom:6px;">Click or Drop your file here</div>
          <div class="muted" style="font-size:.86rem;">PNG, JPG, JPEG, WEBP (max ~4MB preferred)</div>
          <div id="fileName" class="file-name"></div>
        </div>
      </label>

      <div class="actions">
        <button type="submit" class="btn btn-primary" id="uploadBtn" disabled>Upload</button>
        <a href="/upload38" class="btn btn-outline" type="button">Reset</a>
      </div>
    </div>
  </form>
</div>

<script>
  const input = document.getElementById('fileInput');
  const drop = document.getElementById('dropzone');
  const img = document.getElementById('imgPreview');
  const skel = document.getElementById('skel');
  const nameEl = document.getElementById('fileName');
  const uploadBtn = document.getElementById('uploadBtn');

  function setPreview(file){
    if (!file) return;
    nameEl.textContent = file.name;
    if (file.type && file.type.startsWith('image/')) {
      const url = URL.createObjectURL(file);
      img.src = url;
      img.onload = () => {
        skel.style.display = 'none';
        img.classList.add('show');
        URL.revokeObjectURL(url);
      };
    } else {
      // Non-image: no preview, just show filename
      img.removeAttribute('src');
      img.classList.remove('show');
      skel.style.display = 'none';
    }
    uploadBtn.disabled = false;
  }

  input.addEventListener('change', () => {
    setPreview(input.files && input.files[0]);
  });

  ;['dragenter','dragover'].forEach(evt => {
    drop.addEventListener(evt, (e) => {
      e.preventDefault();
      e.stopPropagation();
      drop.classList.add('drag');
    }, false);
  });
  ;['dragleave','dragend','drop'].forEach(evt => {
    drop.addEventListener(evt, (e) => {
      e.preventDefault();
      e.stopPropagation();
      drop.classList.remove('drag');
    }, false);
  });
  drop.addEventListener('drop', (e) => {
    const file = e.dataTransfer.files && e.dataTransfer.files[0];
    if (!file) return;
    // Put file into input
    const dt = new DataTransfer();
    dt.items.add(file);
    input.files = dt.files;
    setPreview(file);
  });
</script>

</body>
</html>