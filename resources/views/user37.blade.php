<div>
    <h1>add new user </h1>
     @if(session('message'))
    <span class="success-message">{{ session('message') }}</span>
    @endif
    <form action="/adduser37" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name"><br><br>
         <input type="text" name="email" placeholder="enter your email"><br><br>
          <input type="text" name="phone" placeholder="enter your phone number"><br><br>
          <button>Add new user</button>
    </form>

</div>
<style>
  .success-message {
    --success-1: #22c55e;
    --success-2: #16a34a;
    --success-3: #059669;
    --border: rgba(255,255,255,.22);

    display: inline-flex;
    align-items: center;
    gap: .6rem;
    padding: .75rem 1rem;
    border-radius: 14px;
    color: #fff;
    background: linear-gradient(135deg, var(--success-1), var(--success-2) 45%, var(--success-3));
    border: 1px solid var(--border);
    box-shadow: 0 10px 20px rgba(34,197,94,.25), 0 2px 6px rgba(0,0,0,.08);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    font: 600 0.95rem/1.2 ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
    letter-spacing: .2px;
    position: relative;
    animation: popIn .45s cubic-bezier(.2,.7,.2,1) both;
  }

  .success-message::before {
    content: '✓';
    display: grid;
    place-items: center;
    width: 1.35rem;
    height: 1.35rem;
    border-radius: 999px;
    background: rgba(255,255,255,.22);
    color: #fff;
    font-size: .9rem;
    font-weight: 900;
    border: 1px solid rgba(255,255,255,.35);
    box-shadow: inset 0 -1px 1px rgba(0,0,0,.15);
  }

  .success-message::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, transparent 0%, rgba(255,255,255,.12) 40%, rgba(255,255,255,.38) 50%, rgba(255,255,255,.12) 60%, transparent 100%);
    transform: translateX(-120%);
    animation: shine 2.2s ease-in-out .4s infinite;
    border-radius: inherit;
    pointer-events: none;
  }

  .success-message:hover {
    transform: translateY(-1px);
    box-shadow: 0 14px 26px rgba(34,197,94,.28), 0 4px 10px rgba(0,0,0,.10);
  }

  @keyframes popIn {
    0% { opacity: 0; transform: translateY(6px) scale(.98); filter: blur(1px); }
    100% { opacity: 1; transform: translateY(0) scale(1); filter: none; }
  }

  @keyframes shine {
    0%   { transform: translateX(-120%); }
    100% { transform: translateX(120%); }
  }

  @media (prefers-reduced-motion: reduce) {
    .success-message,
    .success-message::after { animation: none !important; }
    .success-message:hover { transform: none; }
  }
</style>
