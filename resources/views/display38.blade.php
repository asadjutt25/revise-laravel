{{-- <div>
 <img style="width: 100" src="{{ url('storage/'.$path) }}" >
</div> --}}

{{-- <div>
    <h2>Uploaded Image</h2>
    <img src="{{ asset('storage/'.$path) }}?v={{ time() }}" width="300">
</div>
<!DOCTYPE html>
<html>
<head>
    <title>Image Preview</title>
</head>
<body style="text-align:center; margin-top:40px">

<h2>Uploaded Image</h2>

<img 
    src="{{ asset('storage/'.$path) }}" 
    width="300"
    alt="uploaded image"
/>

</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Uploaded Image</title>
  <style>
    :root{
      --bg: #0b1220;
      --card: rgba(255,255,255,.06);
      --muted: #9aa4b2;
      --text: #e8eef6;
      --accent: #6ee7b7;  /* accent color */
      --accent-2: #22c55e;
      --border: rgba(255,255,255,.12);
    }

    html,body{
      height:100%;
      margin:0;
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

    .image-wrap{
      position: relative;
      background:
        radial-gradient(120% 100% at 0% 0%, #0ea5e922, transparent 60%),
        radial-gradient(120% 100% at 100% 100%, #22c55e22, transparent 60%),
        #0d1527;
      aspect-ratio: 16/10;
    }

    .image-wrap img{
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: contain;
      opacity: 0;
      transform: scale(.985);
      transition: opacity .5s ease, transform .5s ease;
    }
    .image-wrap img.loaded{
      opacity: 1;
      transform: scale(1);
    }

    .img-skeleton{
      position:absolute;
      inset:0;
      border-bottom: 1px solid var(--border);
      background:
        linear-gradient(120deg, rgba(255,255,255,.04) 25%, rgba(255,255,255,.10) 50%, rgba(255,255,255,.04) 75%);
      background-size: 200% 100%;
      animation: shimmer 1.4s linear infinite;
    }
    @keyframes shimmer {
      0% { background-position: 200% 0; }
      100% { background-position: -200% 0; }
    }

    .info{
      padding: 22px 24px 26px;
      display:flex;
      flex-direction:column;
      gap:14px;
    }

    .title{
      display:flex;
      align-items:center;
      gap:.6rem;
      font-weight: 700;
      font-size: clamp(18px, 2.1vw, 22px);
    }
    .badge{
      display:inline-flex;
      align-items:center;
      gap:.35rem;
      padding:.32rem .6rem;
      border-radius: 999px;
      background: linear-gradient(135deg, #16a34a, #22c55e);
      color:#07150c;
      font-size:.78rem;
      font-weight:800;
      border:1px solid rgba(0,0,0,.15);
      box-shadow: 0 6px 18px rgba(34,197,94,.25);
    }

    .muted{ color: var(--muted); font-size:.92rem; }

    .actions{
      display:flex;
      flex-wrap: wrap;
      gap:10px;
      margin-top:6px;
    }

    .btn{
      appearance:none;
      border:none;
      cursor:pointer;
      padding:.7rem 1rem;
      border-radius: 12px;
      font-weight:700;
      letter-spacing:.2px;
      display:inline-flex;
      align-items:center;
      gap:.5rem;
      transition: transform .14s ease, box-shadow .14s ease, background .2s ease, color .2s ease, border-color .2s ease;
      text-decoration:none;
      user-select:none;
      -webkit-user-select:none;
    }
    .btn:active{ transform: translateY(1px); }

    .btn-primary{
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color:#052414;
      box-shadow: 0 10px 24px rgba(34,197,94,.25);
    }
    .btn-primary:hover{ box-shadow: 0 14px 30px rgba(34,197,94,.32); }

    .btn-outline{
      background: transparent;
      color: var(--text);
      border: 1px solid var(--border);
    }
    .btn-outline:hover{
      background: rgba(255,255,255,.06);
    }

    .btn-ghost{
      background: rgba(255,255,255,.04);
      color: var(--text);
      border: 1px dashed var(--border);
    }
    .btn-ghost:hover{ background: rgba(255,255,255,.07); }

    .meta{
      display:flex;
      flex-direction:column;
      gap:4px;
      margin-top:auto;
      padding-top:4px;
    }

    .meta .row{
      display:flex;
      align-items:center;
      gap:.5rem;
      flex-wrap:wrap;
    }
    .divider{
      height:1px; background: var(--border); margin: 4px 0 10px;
    }

    .toast{
      position: fixed;
      left: 50%;
      bottom: 24px;
      transform: translateX(-50%) translateY(20px);
      background: linear-gradient(135deg, #1f2937, #0b1220);
      color: #e8eef6;
      border: 1px solid var(--border);
      padding: .7rem 1rem;
      border-radius: 12px;
      opacity: 0;
      pointer-events: none;
      transition: opacity .25s ease, transform .25s ease;
      box-shadow: 0 12px 30px rgba(0,0,0,.28);
      font-weight:600;
    }
    .toast.show{
      opacity:1;
      transform: translateX(-50%) translateY(0);
    }

    @media (prefers-reduced-motion: reduce){
      .image-wrap img{ transition: none; }
      .img-skeleton{ animation: none; }
      .btn{ transition: none; }
      .toast{ transition: none; }
    }
  </style>
</head>
<body>
@php
  $url = asset('storage/'.$path);
  $filename = basename($path);
@endphp

<div class="wrap">
  <div class="card">
    <div class="image-wrap">
      <div class="img-skeleton" id="imgSkeleton"></div>
      <img id="uploadedImage" src="{{ $url }}?v={{ time() }}" alt="{{ $filename }}" loading="lazy">
    </div>

    <div class="info">
      <div class="title">
        <span class="badge">✓ Uploaded</span>
        <span>Image Preview</span>
      </div>

      <div class="muted">File: {{ $filename }}</div>

      <div class="actions">
        <a class="btn btn-primary" href="{{ $url }}" target="_blank" rel="noopener">
          <!-- open icon -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M14 3h7v7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 3l-9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Open
        </a>

        <a class="btn btn-outline" href="{{ $url }}" download>
          <!-- download icon -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 3v12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><path d="M7 10l5 5 5-5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 21h14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          Download
        </a>

        <button class="btn btn-ghost" id="copyBtn" data-url="{{ $url }}">
          <!-- link icon -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M10 13a5 5 0 0 0 7.07 0l2.83-2.83a5 5 0 1 0-7.07-7.07L10 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 11a5 5 0 0 0-7.07 0L4.1 13.83a5 5 0 1 0 7.07 7.07L14 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Copy Link
        </button>
      </div>

      <div class="meta">
        <div class="divider"></div>
        <div class="row muted">
          Tip: Link ko save kar lein ya download karlain. Dusri file upload karne ke liye back jayein.
        </div>
        <div class="row">
          <a href="/upload38" class="btn btn-outline">
            <!-- back icon -->
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Upload another
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="toast" class="toast">Link copied!</div>

<script>
  // Image load effect + skeleton hide
  const img = document.getElementById('uploadedImage');
  const skeleton = document.getElementById('imgSkeleton');
  if (img.complete) {
    img.classList.add('loaded');
    skeleton.style.display = 'none';
  } else {
    img.addEventListener('load', () => {
      img.classList.add('loaded');
      skeleton.style.display = 'none';
    });
    img.addEventListener('error', () => {
      skeleton.style.display = 'none';
    });
  }

  // Copy link to clipboard
  const btn = document.getElementById('copyBtn');
  const toast = document.getElementById('toast');
  btn.addEventListener('click', async () => {
    const url = btn.dataset.url;
    try {
      await navigator.clipboard.writeText(url);
      showToast('Link copied!');
    } catch (e) {
      // Fallback
      const ta = document.createElement('textarea');
      ta.value = url;
      document.body.appendChild(ta);
      ta.select();
      document.execCommand('copy');
      document.body.removeChild(ta);
      showToast('Link copied!');
    }
  });

  function showToast(msg){
    toast.textContent = msg;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 1600);
  }
</script>
</body>
</html>