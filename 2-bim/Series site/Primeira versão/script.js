/* ===================================
   SERIESVAULT — JAVASCRIPT
   =================================== */

// ---- MODAL DATA ----
const seriesData = {
  bb: {
    title: "Breaking Bad",
    year: "2008–2013",
    studio: "AMC",
    imdb: "9.5",
    seasons: "5",
    episodes: "62",
    where: "Netflix",
    desc: "Walter White, um professor de química do ensino médio diagnosticado com câncer terminal, decide fabricar metanfetamina com seu ex-aluno Jesse Pinkman para garantir o futuro financeiro de sua família. Ao longo da série, sua transformação em 'Heisenberg' é um dos arcos de personagem mais bem escritos da história da TV.",
    cast: "Bryan Cranston (Walter White), Aaron Paul (Jesse Pinkman), Anna Gunn (Skyler White), Dean Norris (Hank Schrader), Giancarlo Esposito (Gus Fring), Bob Odenkirk (Saul Goodman)",
    creator: "Vince Gilligan",
    genre: "Drama / Crime / Thriller"
  },
  tb: {
    title: "The Boys",
    year: "2019–presente",
    studio: "Prime Video / Amazon",
    imdb: "8.7",
    seasons: "5",
    episodes: "45",
    where: "Prime Video",
    desc: "Em um mundo onde super-heróis são celebridades corrompidas e controladas por uma megacorporação, um grupo de vigilantes resolve fazer justiça com as próprias mãos. A série satiriza política, corporativismo e cultura de celebridades de forma extremamente violenta e inteligente.",
    cast: "Karl Urban (Billy Butcher), Jack Quaid (Hughie), Antony Starr (Homelander), Erin Moriarty (Annie/Starlight), Tomer Capone (Frenchie), Karen Fukuhara (Kimiko)",
    creator: "Eric Kripke",
    genre: "+18 Violenta / Sci-Fi / Sátira"
  },
  gumball: {
    title: "O Incrível Mundo de Gumball",
    year: "2011–2019",
    studio: "Cartoon Network",
    imdb: "8.4",
    seasons: "6",
    episodes: "240",
    where: "Max",
    desc: "Gumball Watterson, um gato azul de 12 anos, vive em Elmore com sua família caótica — sua mãe Nicole, seu pai Richard, seu irmão goldfish Darwin e sua irmã genial Anais. A série mistura diferentes estilos de animação de forma revolucionária.",
    cast: "Nicolas Cantu / Jacob Hopkins (Gumball), Kyla Rae Kowalewski (Anais), Dan Russell (Richard), Teresa Gallagher (Nicole/Penny)",
    creator: "Ben Bocquelet",
    genre: "Animação / Comédia / Surrealismo"
  },
  rs: {
    title: "Apenas um Show (Regular Show)",
    year: "2010–2017",
    studio: "Cartoon Network",
    imdb: "8.6",
    seasons: "8",
    episodes: "261",
    where: "Max",
    desc: "Mordecai (um jay-bird azul) e Rigby (um guaxinim) trabalham como jardineiros em um parque, mas suas tentativas de escapar do trabalho sempre terminam em aventuras sobrenaturais e épicas que ameaçam o universo inteiro.",
    cast: "JG Quintel (Mordecai), William Salyers (Rigby), Sam Marin (Pops/Muscle Man/Hi Five Ghost), Mark Hamill (Skips), Roger Craig Smith (Mordecai — piloto)",
    creator: "JG Quintel",
    genre: "Animação / Comédia / Aventura Sobrenatural"
  },
  "12oz": {
    title: "12 oz. Mouse",
    year: "2005–2020",
    studio: "Adult Swim / Cartoon Network",
    imdb: "6.8",
    seasons: "3",
    episodes: "27",
    where: "Adult Swim",
    desc: "Mouse Fitzgerald acorda sem memórias em uma cidade bizarra e distorcida. Cada episódio adiciona mais camadas a uma narrativa propositalmente confusa, com animação tosca e surreal. É uma obra-prima do absurdo que confunde e fascina.",
    cast: "Matt Maiellaro (Mouse Fitzgerald / Shark), Vishal Roney (Roostre), Adam Reed, outros",
    creator: "Matt Maiellaro",
    genre: "Animação Surreal / Experimental / Comédia Absurda"
  },
  dn: {
    title: "Death Note",
    year: "2006–2007",
    studio: "Madhouse",
    imdb: "9.0",
    seasons: "1",
    episodes: "37",
    where: "Netflix / Crunchyroll",
    desc: "Light Yagami, um estudante brilhante, encontra um caderno sobrenatural que pode matar qualquer pessoa cujo nome seja escrito nele. Ao tentar criar um mundo sem crime como 'Kira', ele entra em um duelo intelectual épico com o misterioso detetive L.",
    cast: "Mamoru Miyano (Light Yagami), Kappei Yamaguchi (L), Shido Nakamura (Ryuk), Aya Hirano (Misa Amane)",
    creator: "Tsugumi Ohba (mangá) / Madhouse (anime)",
    genre: "Anime / Thriller Psicológico / Suspense"
  },
  aot: {
    title: "Attack on Titan (Shingeki no Kyojin)",
    year: "2013–2023",
    studio: "Wit Studio / MAPPA",
    imdb: "9.0",
    seasons: "4",
    episodes: "94",
    where: "Crunchyroll / Netflix",
    desc: "Humanidade sobrevive dentro de muralhas gigantes para se proteger de criaturas humanoides chamadas Titãs. Quando as muralhas são derrubadas, Eren Yeager jura eliminar todos os titãs — mas a verdade sobre eles é muito mais complexa do que parece.",
    cast: "Yuki Kaji (Eren Yeager), Marina Inoue (Armin Arlert), Yui Ishikawa (Mikasa Ackerman), Hiroshi Kamiya (Levi Ackerman)",
    creator: "Hajime Isayama (mangá) / Wit Studio / MAPPA (anime)",
    genre: "Anime / +18 Violenta / Ação / Drama"
  },
  pb: {
    title: "Peaky Blinders",
    year: "2013–2022",
    studio: "BBC One",
    imdb: "8.8",
    seasons: "6",
    episodes: "36",
    where: "Netflix",
    desc: "Tommy Shelby comanda a gangue Peaky Blinders em Birmingham, Inglaterra, após a Primeira Guerra Mundial. Com ambição sem limites, ele navega pelo crime organizado, a política e a alta sociedade britânica em um mundo brutal e elegante.",
    cast: "Cillian Murphy (Tommy Shelby), Tom Hardy (Alfie Solomons), Helen McCrory (Polly Gray), Paul Anderson (Arthur Shelby)",
    creator: "Steven Knight",
    genre: "Crime / Drama / Período Histórico"
  },
  at: {
    title: "Hora de Aventura (Adventure Time)",
    year: "2010–2018",
    studio: "Cartoon Network",
    imdb: "8.6",
    seasons: "10",
    episodes: "283",
    where: "Max",
    desc: "Finn, um humano, e Jake, um cachorro com poderes mágicos, vivem aventuras na Terra de Ooo — um mundo pós-apocalíptico cheio de princesas, feiticeiros e segredos sombrios. A série começa simples e evolui para algo profundo e emocionalmente impactante.",
    cast: "Jeremy Shada (Finn), John DiMaggio (Jake), Tom Kenny (Ice King), Hynden Walch (Princesa Bubblegum), Niki Yang (BMO/Lady Rainicorn)",
    creator: "Pendleton Ward",
    genre: "Animação / Fantasia / Aventura"
  },
  naruto: {
    title: "Naruto + Naruto Shippuden",
    year: "2002–2017",
    studio: "Studio Pierrot / TV Tokyo",
    imdb: "8.3",
    seasons: "21",
    episodes: "720",
    where: "Crunchyroll / Netflix",
    desc: "Naruto Uzumaki, um jovem ninja com a Raposa de Nove Caudas selada dentro de si, cresceu sendo rejeitado por todos. Sua jornada para se tornar o Hokage é uma das mais emocionantes do mundo dos animes, com batalhas épicas, amizades profundas e revelações devastadoras.",
    cast: "Junko Takeuchi (Naruto), Noriaki Sugiyama (Sasuke), Chie Nakamura (Sakura), Kazuhiko Inoue (Kakashi), Toshiyuki Morikawa (Minato)",
    creator: "Masashi Kishimoto (mangá)",
    genre: "Anime / Aventura / Ninja / Shonen"
  },
  st: {
    title: "Stranger Things",
    year: "2016–2025",
    studio: "Netflix",
    imdb: "8.7",
    seasons: "5",
    episodes: "42",
    where: "Netflix",
    desc: "Em Hawkins, Indiana, o desaparecimento do garoto Will Byers revela experimentos secretos do governo, um mundo paralelo chamado Mundo Invertido e uma garota com poderes sobrenaturais conhecida apenas como Eleven.",
    cast: "Millie Bobby Brown (Eleven), Finn Wolfhard (Mike Wheeler), Winona Ryder (Joyce Byers), David Harbour (Jim Hopper), Gaten Matarazzo (Dustin), Caleb McLaughlin (Lucas), Noah Schnapp (Will)",
    creator: "Irmãos Duffer",
    genre: "Sci-Fi / Drama / Terror / Nostalgia 80s"
  },
  office: {
    title: "The Office",
    year: "2005–2013",
    studio: "NBC",
    imdb: "9.0",
    seasons: "9",
    episodes: "201",
    where: "Peacock / Prime Video",
    desc: "Filmado no formato de documentário fictício (mockumentary), acompanha os funcionários da Dunder Mifflin Paper Company em Scranton, Pennsylvania, liderados pelo gerente Michael Scott — cujo objetivo de vida é ser o melhor chefe e melhor amigo de todos.",
    cast: "Steve Carell (Michael Scott), John Krasinski (Jim Halpert), Jenna Fischer (Pam Beesly), Rainn Wilson (Dwight Schrute), Ed Helms (Andy Bernard), Craig Robinson (Darryl)",
    creator: "Greg Daniels (baseado no original britânico de Ricky Gervais)",
    genre: "Comédia / Mockumentary"
  },
  got: {
    title: "Game of Thrones",
    year: "2011–2019",
    studio: "HBO",
    imdb: "9.2",
    seasons: "8",
    episodes: "73",
    where: "Max",
    desc: "Baseada em 'As Crônicas de Gelo e Fogo', a série retrata a luta pelo Trono de Ferro de Westeros. Com dezenas de personagens complexos, a série é conhecida por matar protagonistas sem aviso, reviravoltas épicas e produção cinematográfica imbatível.",
    cast: "Emilia Clarke (Daenerys), Kit Harington (Jon Snow), Peter Dinklage (Tyrion Lannister), Lena Headey (Cersei), Sean Bean (Ned Stark), Nikolaj Coster-Waldau (Jaime)",
    creator: "David Benioff e D.B. Weiss",
    genre: "Fantasia / Drama / +18 Violenta / Épico Medieval"
  },
  op: {
    title: "One Piece",
    year: "1999–presente",
    studio: "Toei Animation / Fuji TV",
    imdb: "8.9",
    seasons: "21+",
    episodes: "1100+",
    where: "Crunchyroll",
    desc: "Monkey D. Luffy come uma Fruta do Diabo que transforma seu corpo em borracha. Ele monta uma tripulação de piratas, o Chapéu de Palha, e parte em busca do One Piece — o maior tesouro do mundo — para se tornar o Rei dos Piratas.",
    cast: "Mayumi Tanaka (Luffy), Kazuya Nakai (Zoro), Akemi Okamura (Nami), Kappei Yamaguchi (Usopp), Hiroaki Hirata (Sanji)",
    creator: "Eiichiro Oda (mangá)",
    genre: "Anime / Aventura / Pirata / Shonen"
  },
  dark: {
    title: "Dark",
    year: "2017–2020",
    studio: "Netflix / Wiedemann & Berg Film",
    imdb: "8.8",
    seasons: "3",
    episodes: "26",
    where: "Netflix",
    desc: "Quando crianças desaparecem em Winden, uma pequena cidade alemã, quatro famílias descobrem conexões entre si que atravessam gerações e décadas. Uma das narrativas de viagem no tempo mais complexas e bem executadas da história das séries.",
    cast: "Louis Hofmann (Jonas jovem), Lisa Vicari (Martha), Karoline Eichhorn (Charlotte), Maja Schöne (Hannah), Oliver Masucci (Ulrich)",
    creator: "Baran bo Odar e Jantje Friese",
    genre: "Sci-Fi / Mistério / Viagem no Tempo / Drama Alemão"
  },
  bh: {
    title: "BoJack Horseman",
    year: "2014–2020",
    studio: "Netflix",
    imdb: "8.7",
    seasons: "6",
    episodes: "77",
    where: "Netflix",
    desc: "BoJack Horseman, um cavalo-ator que foi famoso nos anos 90 com um sitcom, tenta resgatar sua carreira e sua vida em Hollywoo. A série é uma análise devastadoramente honesta sobre depressão, trauma, vício e autossabotagem.",
    cast: "Will Arnett (BoJack), Amy Sedaris (Princess Carolyn), Aaron Paul (Todd), Alison Brie (Diane Nguyen), Paul F. Tompkins (Mr. Peanutbutter)",
    creator: "Raphael Bob-Waksberg",
    genre: "Animação Adulta / Drama / Comédia Existencialista"
  },
  arcane: {
    title: "Arcane",
    year: "2021–2024",
    studio: "Riot Games / Fortiche Production / Netflix",
    imdb: "9.0",
    seasons: "2",
    episodes: "18",
    where: "Netflix",
    desc: "Ambientada no universo de League of Legends, Arcane acompanha as irmãs Vi e Jinx crescendo em Zaun, a cidade subterrânea, enquanto tensões explodem entre os desfavorecidos e a cidade rica de Piltover. Com animação revolucionária e história intensa.",
    cast: "Hailee Steinfeld (Vi), Ella Purnell (Jinx), Kevin Alejandro (Jayce), Katie Leung (Caitlyn), Toks Olagundoye (Mel), Jason Spisak (Silco)",
    creator: "Christian Linke e Alex Yee",
    genre: "Animação / Fantasia Steampunk / Ação / Drama"
  },
  sp: {
    title: "South Park",
    year: "1997–presente",
    studio: "Comedy Central",
    imdb: "8.7",
    seasons: "27+",
    episodes: "330+",
    where: "Max / Paramount+",
    desc: "Em South Park, Colorado, quatro meninos de 4ª série — Cartman, Stan, Kyle e Kenny — vivem situações cada vez mais absurdas. A série é famosa por satirizar sem censura política, religião, celebridades e qualquer tema relevante da sociedade.",
    cast: "Trey Parker (Cartman/Stan/Randy/Mr. Garrison), Matt Stone (Kyle/Kenny/Butters/Craig)",
    creator: "Trey Parker e Matt Stone",
    genre: "Animação +18 / Sátira / Comédia Adulta"
  },
  inv: {
    title: "Invincible",
    year: "2021–presente",
    studio: "Prime Video / Amazon",
    imdb: "8.7",
    seasons: "3",
    episodes: "24",
    where: "Prime Video",
    desc: "Mark Grayson tem 17 anos quando começa a manifestar os superpoderes do pai, Omni-Man, o maior super-herói do planeta. Mas a verdade sobre quem seu pai realmente é muda tudo — e a série não tem medo de mostrar sangue e consequências reais de superpoderes.",
    cast: "Steven Yeun (Mark Grayson), J.K. Simmons (Nolan/Omni-Man), Sandra Oh (Debbie Grayson), Zazie Beetz (Amber), Walton Goggins (Cecil)",
    creator: "Robert Kirkman (quadrinhos) / Amazon Prime",
    genre: "Animação Adulta / +18 Violenta / Super-herói"
  },
  bcs: {
    title: "Better Call Saul",
    year: "2015–2022",
    studio: "AMC",
    imdb: "9.0",
    seasons: "6",
    episodes: "63",
    where: "Netflix / AMC+",
    desc: "Prequel e spin-off de Breaking Bad. Acompanha a transformação de Jimmy McGill, um advogado bem-intencionado de segunda linha, em Saul Goodman — o advogado sem escrúpulos que Walter White eventualmente contrata. Considerado por muitos até melhor que o original.",
    cast: "Bob Odenkirk (Jimmy McGill/Saul), Rhea Seehorn (Kim Wexler), Jonathan Banks (Mike Ehrmantraut), Patrick Fabian (Howard), Giancarlo Esposito (Gus Fring)",
    creator: "Vince Gilligan e Peter Gould",
    genre: "Crime / Drama / Prequel"
  },
  wire: {
    title: "The Wire",
    year: "2002–2008",
    studio: "HBO",
    imdb: "9.3",
    seasons: "5",
    episodes: "60",
    where: "Max",
    desc: "Constantemente apontada como a melhor série de TV já produzida. Retrata Baltimore de todos os ângulos possíveis: tráfico de drogas, polícia, docas, política, sistema educacional e mídia. Cada temporada foca em uma instituição diferente, mas os personagens se conectam.",
    cast: "Dominic West (McNulty), Idris Elba (Stringer Bell), Lance Reddick (Cedric Daniels), Michael K. Williams (Omar Little), Wendell Pierce (Bunk)",
    creator: "David Simon",
    genre: "Crime / Drama / Realismo Social"
  }
};

// ---- PARTICLES ----
function createParticles() {
  const container = document.getElementById('particles');
  if (!container) return;
  for (let i = 0; i < 30; i++) {
    const p = document.createElement('div');
    p.className = 'particle';
    p.style.cssText = `
      left: ${Math.random() * 100}%;
      top: ${Math.random() * 100}%;
      --dur: ${4 + Math.random() * 6}s;
      --delay: ${Math.random() * 6}s;
      background: ${Math.random() > 0.5 ? '#e63946' : '#6366f1'};
      width: ${1 + Math.random() * 3}px;
      height: ${1 + Math.random() * 3}px;
    `;
    container.appendChild(p);
  }
}

// ---- COUNT-UP ANIMATION ----
function animateCounters() {
  const nums = document.querySelectorAll('.stat-num');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.dataset.target);
        let current = 0;
        const step = target / 50;
        const interval = setInterval(() => {
          current = Math.min(current + step, target);
          el.textContent = Math.floor(current);
          if (current >= target) {
            el.textContent = target;
            clearInterval(interval);
          }
        }, 30);
        observer.unobserve(el);
      }
    });
  });
  nums.forEach(n => observer.observe(n));
}

// ---- RATINGS ----
function getRatings() {
  try {
    return JSON.parse(localStorage.getItem('sv_ratings') || '{}');
  } catch { return {}; }
}

function saveRatings(ratings) {
  try { localStorage.setItem('sv_ratings', JSON.stringify(ratings)); } catch {}
}

function getAvgDisplay(id) {
  const r = getRatings();
  if (!r[id]) return '–';
  const avg = (r[id].sum / r[id].count).toFixed(1);
  return `${avg}/5 (${r[id].count} voto${r[id].count > 1 ? 's' : ''})`;
}

function initStars() {
  document.querySelectorAll('.stars').forEach(starsEl => {
    const id = starsEl.dataset.id;
    const stars = starsEl.querySelectorAll('.star');
    const avgEl = document.getElementById('avg-' + id);
    const ratings = getRatings();
    const myRating = ratings[id]?.mine;

    // Mark user's saved rating
    if (myRating) {
      stars.forEach(s => {
        if (parseInt(s.dataset.val) <= myRating) s.classList.add('active');
      });
    }

    if (avgEl) avgEl.textContent = getAvgDisplay(id);

    stars.forEach(star => {
      star.addEventListener('mouseenter', () => {
        const val = parseInt(star.dataset.val);
        stars.forEach(s => {
          s.classList.toggle('hover', parseInt(s.dataset.val) <= val);
        });
      });

      star.addEventListener('mouseleave', () => {
        stars.forEach(s => s.classList.remove('hover'));
      });

      star.addEventListener('click', () => {
        const val = parseInt(star.dataset.val);
        const r = getRatings();
        if (!r[id]) r[id] = { sum: 0, count: 0 };

        // Remove old vote
        if (r[id].mine) {
          r[id].sum -= r[id].mine;
          r[id].count -= 1;
        }

        r[id].mine = val;
        r[id].sum += val;
        r[id].count += 1;
        saveRatings(r);

        stars.forEach(s => {
          s.classList.toggle('active', parseInt(s.dataset.val) <= val);
        });

        if (avgEl) avgEl.textContent = getAvgDisplay(id);

        updateRanking();

        // Feedback animation
        starsEl.style.transform = 'scale(1.1)';
        setTimeout(() => starsEl.style.transform = '', 200);
      });
    });
  });
}

// ---- RANKING ----
function updateRanking() {
  const list = document.getElementById('rankingList');
  if (!list) return;
  const r = getRatings();
  const ranked = Object.entries(r)
    .filter(([, v]) => v.count > 0)
    .map(([id, v]) => ({ id, avg: v.sum / v.count, count: v.count }))
    .sort((a, b) => b.avg - a.avg);

  if (ranked.length === 0) {
    list.innerHTML = `
      <div class="ranking-empty">
        <span class="ranking-empty-icon">⭐</span>
        <p>Avalie algumas séries acima para ver o ranking!</p>
      </div>`;
    return;
  }

  const posColors = ['gold', 'silver', 'bronze'];

  list.innerHTML = ranked.map((item, i) => {
    const d = seriesData[item.id];
    const title = d ? d.title : item.id;
    const stars = '★'.repeat(Math.round(item.avg)) + '☆'.repeat(5 - Math.round(item.avg));
    const posClass = posColors[i] || '';
    const medal = i === 0 ? '🥇' : i === 1 ? '🥈' : i === 2 ? '🥉' : '';
    return `
      <div class="ranking-item" style="animation-delay:${i * 0.05}s">
        <div class="rank-pos ${posClass}">${medal || '#' + (i + 1)}</div>
        <div class="rank-title">${title}</div>
        <div class="rank-stars">${stars}</div>
        <div class="rank-score">${item.avg.toFixed(1)}</div>
      </div>`;
  }).join('');
}

// ---- FILTERING ----
function filterSeries() {
  const activeBtn = document.querySelector('.cat-btn.active');
  const cat = activeBtn ? activeBtn.dataset.cat : 'todas';
  const q = document.getElementById('searchInput').value.toLowerCase().trim();
  const cards = document.querySelectorAll('.card');
  let visible = 0;

  cards.forEach(card => {
    const categories = card.dataset.cat || '';
    const title = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
    const desc = card.querySelector('.card-desc')?.textContent.toLowerCase() || '';

    const catMatch = cat === 'todas' || categories.includes(cat);
    const searchMatch = !q || title.includes(q) || desc.includes(q);

    if (catMatch && searchMatch) {
      card.style.display = '';
      visible++;
    } else {
      card.style.display = 'none';
    }
  });

  const count = document.querySelector('#seriesCount span');
  if (count) count.textContent = visible;

  // No results message
  const grid = document.getElementById('seriesGrid');
  const existing = grid.querySelector('.no-results');
  if (existing) existing.remove();

  if (visible === 0) {
    grid.insertAdjacentHTML('beforeend', `
      <div class="no-results">
        <span class="no-icon">🔍</span>
        <p>Nenhuma série encontrada para "<strong>${q || cat}</strong>"</p>
      </div>
    `);
  }
}

// ---- CATEGORY BUTTONS ----
document.querySelectorAll('.cat-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    filterSeries();
  });
});

// ---- SEARCH ----
const searchInput = document.getElementById('searchInput');
const searchClear = document.getElementById('searchClear');

searchInput?.addEventListener('input', () => {
  const v = searchInput.value;
  if (searchClear) searchClear.style.display = v ? 'block' : 'none';
  filterSeries();
});

searchClear?.addEventListener('click', () => {
  searchInput.value = '';
  searchClear.style.display = 'none';
  filterSeries();
});

// ---- MODAL ----
function openModal(id) {
  const d = seriesData[id];
  if (!d) return;

  const content = document.getElementById('modalContent');
  const r = getRatings();
  const avg = r[id] ? (r[id].sum / r[id].count).toFixed(1) : null;

  content.innerHTML = `
    <h2>${d.title}</h2>
    <p class="year">${d.year} · ${d.studio}</p>
    <div class="modal-imdb">
      <span>⭐</span>
      <span class="score">${d.imdb}</span>
      <span class="label">IMDb</span>
      ${avg ? `<span style="margin-left:12px;color:var(--accent2)">Nota do site: ${avg}/5</span>` : ''}
    </div>
    <p>${d.desc}</p>
    <div class="modal-grid">
      <div class="modal-item">
        <div class="label">Temporadas</div>
        <div class="value">${d.seasons}</div>
      </div>
      <div class="modal-item">
        <div class="label">Episódios</div>
        <div class="value">${d.episodes}</div>
      </div>
      <div class="modal-item">
        <div class="label">Onde Ver</div>
        <div class="value">${d.where}</div>
      </div>
      <div class="modal-item">
        <div class="label">Gênero</div>
        <div class="value">${d.genre}</div>
      </div>
      <div class="modal-item" style="grid-column:1/-1">
        <div class="label">Criador / Diretor</div>
        <div class="value">${d.creator}</div>
      </div>
      <div class="modal-item" style="grid-column:1/-1">
        <div class="label">Elenco / Dublagem</div>
        <div class="value" style="font-size:13px;font-weight:400;color:var(--muted)">${d.cast}</div>
      </div>
    </div>
  `;

  document.getElementById('modalOverlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('modalOverlay').classList.remove('open');
  document.body.style.overflow = '';
}

// Close modal on Escape
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeModal();
});

// ---- HAMBURGER MENU ----
document.getElementById('hamburger')?.addEventListener('click', () => {
  document.getElementById('mobileNav').classList.toggle('open');
});

function closeMobileNav() {
  document.getElementById('mobileNav').classList.remove('open');
}

// ---- HEADER SCROLL ----
window.addEventListener('scroll', () => {
  const header = document.getElementById('header');
  if (window.scrollY > 60) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }

  const backTop = document.getElementById('backTop');
  if (window.scrollY > 400) {
    backTop.classList.add('visible');
  } else {
    backTop.classList.remove('visible');
  }
});

// ---- CARD REVEAL ON SCROLL ----
function initReveal() {
  const cards = document.querySelectorAll('.card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        entry.target.style.animation = `fade-up 0.5s ${i * 0.03}s ease both`;
        entry.target.style.opacity = '1';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  cards.forEach(card => {
    card.style.opacity = '0';
    observer.observe(card);
  });
}

// ---- INIT ----
document.addEventListener('DOMContentLoaded', () => {
  createParticles();
  animateCounters();
  initStars();
  updateRanking();
  initReveal();
});
