// i18n.js - Sistema de Internacionalização do SeriesVault

const translations = {
    'pt-BR': {
      // Header
      'app.title': 'SeriesVault',
      'nav.categories': 'Categorias',
      'nav.series': 'Séries',
      'nav.ranking': 'Ranking',
      'nav.about': 'Sobre',
      
      // Hero
      'hero.badge': '🎬 Catálogo Completo 2026',
      'hero.title': 'Descubra as<br><span class="gradient-text">Melhores Séries</span><br>do Mundo',
      'hero.subtitle': 'Avalie, explore e encontre sua próxima série favorita. De Breaking Bad a Regular Show — temos tudo aqui.',
      'hero.series': 'Séries',
      'hero.categories': 'Categorias',
      'hero.ratings': 'Avaliações',
      'hero.explore': 'Explorar Séries',
      'hero.ranking': 'Ver Ranking',
      'hero.scroll': 'Role para baixo',
      
      // Categories
      'categories.title': 'Categorias',
      'categories.subtitle': 'Filtre pelo gênero que você mais curte',
      'categories.all': '🎭 Todas',
      'categories.drama': '🎭 Drama',
      'categories.action': '💥 +18 Violenta',
      'categories.animation': '🎨 Animação',
      'categories.anime': '⚔️ Anime',
      'categories.comedy': '😂 Comédia',
      'categories.crime': '🔫 Crime',
      'categories.fantasy': '🧙 Fantasia',
      
      // Search
      'search.placeholder': 'Buscar série...',
      
      // Series Grid
      'series.title': 'Catálogo de Séries',
      'series.showing': 'Mostrando',
      'series.noResults': 'Nenhuma série encontrada para',
      
      // Card
      'card.seasons': 'Temporadas',
      'card.episodes': 'Episódios',
      'card.where': 'Onde ver',
      'card.cast': 'Elenco principal:',
      'card.yourRating': 'Sua nota:',
      'card.details': 'Ver Detalhes',
      
      // Ranking
      'ranking.title': '🏆 Ranking das Mais Bem Avaliadas',
      'ranking.subtitle': 'Baseado nas avaliações dos usuários do site',
      'ranking.empty': 'Avalie algumas séries acima para ver o ranking!',
      'ranking.votes': 'voto',
      'ranking.votes_plural': 'votos',
      
      // About
      'about.title': 'Sobre o SeriesVault',
      'about.p1': 'O <strong>SeriesVault</strong> é o catálogo definitivo para cinéfilos e fãs de séries. Aqui você encontra informações completas, avalia suas séries favoritas e descobre novas para maratonar.',
      'about.p2': 'De animações clássicas do Cartoon Network a dramas intensos da HBO, passando por animes épicos e comédias inesquecíveis — temos de tudo para você.',
      'about.cataloged': 'Séries catalogadas',
      'about.categories': 'Categorias',
      'about.free': 'Gratuito',
      
      // Footer
      'footer.description': 'Seu catálogo pessoal de séries',
      'footer.copyright': '© 2026 SeriesVault · Feito com ❤️ para amantes de séries',
      
      // Modal
      'modal.creator': 'Criador / Diretor',
      'modal.cast': 'Elenco / Dublagem',
      'modal.siteRating': 'Nota do site',
      
      // Tags
      'tag.crime': 'Crime',
      'tag.drama': 'Drama',
      'tag.action': '+18 Violenta',
      'tag.animation': 'Animação',
      'tag.comedy': 'Comédia',
      'tag.anime': 'Anime',
      'tag.fantasy': 'Fantasia',
      'tag.sciFi': 'Sci-Fi',
      'tag.surreal': 'Surreal',
      'tag.suspense': 'Suspense',
      'tag.thriller': 'Thriller',
      'tag.ninja': 'Ninja',
      'tag.shonen': 'Shonen',
      'tag.pirate': 'Pirata',
      'tag.steampunk': 'Steampunk',
      'tag.mockumentary': 'Mockumentary',
      'tag.mystery': 'Mistério',
      'tag.adventure': 'Aventura',
      'tag.satire': 'Sátira',
      'tag.superhero': 'Super-herói',
      'tag.prequel': 'Prequel',
      'tag.social': 'Realismo Social'
    },
    
    'en-US': {
      // Header
      'app.title': 'SeriesVault',
      'nav.categories': 'Categories',
      'nav.series': 'Series',
      'nav.ranking': 'Ranking',
      'nav.about': 'About',
      
      // Hero
      'hero.badge': '🎬 Complete Catalog 2026',
      'hero.title': 'Discover the<br><span class="gradient-text">Best Series</span><br>in the World',
      'hero.subtitle': 'Rate, explore and find your next favorite series. From Breaking Bad to Regular Show — we have it all here.',
      'hero.series': 'Series',
      'hero.categories': 'Categories',
      'hero.ratings': 'Ratings',
      'hero.explore': 'Explore Series',
      'hero.ranking': 'View Ranking',
      'hero.scroll': 'Scroll down',
      
      // Categories
      'categories.title': 'Categories',
      'categories.subtitle': 'Filter by your favorite genre',
      'categories.all': '🎭 All',
      'categories.drama': '🎭 Drama',
      'categories.action': '💥 +18 Violent',
      'categories.animation': '🎨 Animation',
      'categories.anime': '⚔️ Anime',
      'categories.comedy': '😂 Comedy',
      'categories.crime': '🔫 Crime',
      'categories.fantasy': '🧙 Fantasy',
      
      // Search
      'search.placeholder': 'Search series...',
      
      // Series Grid
      'series.title': 'Series Catalog',
      'series.showing': 'Showing',
      'series.noResults': 'No series found for',
      
      // Card
      'card.seasons': 'Seasons',
      'card.episodes': 'Episodes',
      'card.where': 'Where to watch',
      'card.cast': 'Main cast:',
      'card.yourRating': 'Your rating:',
      'card.details': 'View Details',
      
      // Ranking
      'ranking.title': '🏆 Highest Rated Ranking',
      'ranking.subtitle': 'Based on user ratings on the site',
      'ranking.empty': 'Rate some series above to see the ranking!',
      'ranking.votes': 'vote',
      'ranking.votes_plural': 'votes',
      
      // About
      'about.title': 'About SeriesVault',
      'about.p1': '<strong>SeriesVault</strong> is the ultimate catalog for cinephiles and series fans. Here you\'ll find complete information, rate your favorite series and discover new ones to binge-watch.',
      'about.p2': 'From classic Cartoon Network animations to intense HBO dramas, through epic anime and unforgettable comedies — we have it all for you.',
      'about.cataloged': 'Cataloged series',
      'about.categories': 'Categories',
      'about.free': 'Free',
      
      // Footer
      'footer.description': 'Your personal series catalog',
      'footer.copyright': '© 2026 SeriesVault · Made with ❤️ for series lovers',
      
      // Modal
      'modal.creator': 'Creator / Director',
      'modal.cast': 'Cast / Voice Actors',
      'modal.siteRating': 'Site rating',
      
      // Tags
      'tag.crime': 'Crime',
      'tag.drama': 'Drama',
      'tag.action': '+18 Violent',
      'tag.animation': 'Animation',
      'tag.comedy': 'Comedy',
      'tag.anime': 'Anime',
      'tag.fantasy': 'Fantasy',
      'tag.sciFi': 'Sci-Fi',
      'tag.surreal': 'Surreal',
      'tag.suspense': 'Suspense',
      'tag.thriller': 'Thriller',
      'tag.ninja': 'Ninja',
      'tag.shonen': 'Shonen',
      'tag.pirate': 'Pirate',
      'tag.steampunk': 'Steampunk',
      'tag.mockumentary': 'Mockumentary',
      'tag.mystery': 'Mystery',
      'tag.adventure': 'Adventure',
      'tag.satire': 'Satire',
      'tag.superhero': 'Superhero',
      'tag.prequel': 'Prequel',
      'tag.social': 'Social Realism'
    },
    
    'fr-FR': {
      // Header
      'app.title': 'SeriesVault',
      'nav.categories': 'Catégories',
      'nav.series': 'Séries',
      'nav.ranking': 'Classement',
      'nav.about': 'À propos',
      
      // Hero
      'hero.badge': '🎬 Catalogue Complet 2026',
      'hero.title': 'Découvrez les<br><span class="gradient-text">Meilleures Séries</span><br>du Monde',
      'hero.subtitle': 'Évaluez, explorez et trouvez votre prochaine série préférée. De Breaking Bad à Regular Show — nous avons tout ici.',
      'hero.series': 'Séries',
      'hero.categories': 'Catégories',
      'hero.ratings': 'Évaluations',
      'hero.explore': 'Explorer les Séries',
      'hero.ranking': 'Voir le Classement',
      'hero.scroll': 'Défiler vers le bas',
      
      // Categories
      'categories.title': 'Catégories',
      'categories.subtitle': 'Filtrez par genre préféré',
      'categories.all': '🎭 Toutes',
      'categories.drama': '🎭 Drame',
      'categories.action': '💥 +18 Violent',
      'categories.animation': '🎨 Animation',
      'categories.anime': '⚔️ Anime',
      'categories.comedy': '😂 Comédie',
      'categories.crime': '🔫 Crime',
      'categories.fantasy': '🧙 Fantaisie',
      
      // Search
      'search.placeholder': 'Rechercher une série...',
      
      // Series Grid
      'series.title': 'Catalogue des Séries',
      'series.showing': 'Affichage de',
      'series.noResults': 'Aucune série trouvée pour',
      
      // Card
      'card.seasons': 'Saisons',
      'card.episodes': 'Épisodes',
      'card.where': 'Où regarder',
      'card.cast': 'Distribution principale:',
      'card.yourRating': 'Votre note:',
      'card.details': 'Voir les Détails',
      
      // Ranking
      'ranking.title': '🏆 Classement des Mieux Notées',
      'ranking.subtitle': 'Basé sur les évaluations des utilisateurs',
      'ranking.empty': 'Évaluez des séries ci-dessus pour voir le classement!',
      'ranking.votes': 'vote',
      'ranking.votes_plural': 'votes',
      
      // About
      'about.title': 'À propos de SeriesVault',
      'about.p1': '<strong>SeriesVault</strong> est le catalogue ultime pour les cinéphiles et les fans de séries. Vous y trouverez des informations complètes, évaluerez vos séries préférées et en découvrirez de nouvelles à regarder en boucle.',
      'about.p2': 'Des animations classiques de Cartoon Network aux drames intenses de HBO, en passant par les animes épiques et les comédies inoubliables — nous avons tout pour vous.',
      'about.cataloged': 'Séries cataloguées',
      'about.categories': 'Catégories',
      'about.free': 'Gratuit',
      
      // Footer
      'footer.description': 'Votre catalogue personnel de séries',
      'footer.copyright': '© 2026 SeriesVault · Fait avec ❤️ pour les amateurs de séries',
      
      // Modal
      'modal.creator': 'Créateur / Réalisateur',
      'modal.cast': 'Distribution / Doublage',
      'modal.siteRating': 'Note du site',
      
      // Tags
      'tag.crime': 'Crime',
      'tag.drama': 'Drame',
      'tag.action': '+18 Violent',
      'tag.animation': 'Animation',
      'tag.comedy': 'Comédie',
      'tag.anime': 'Anime',
      'tag.fantasy': 'Fantaisie',
      'tag.sciFi': 'Sci-Fi',
      'tag.surreal': 'Surréaliste',
      'tag.suspense': 'Suspense',
      'tag.thriller': 'Thriller',
      'tag.ninja': 'Ninja',
      'tag.shonen': 'Shonen',
      'tag.pirate': 'Pirate',
      'tag.steampunk': 'Steampunk',
      'tag.mockumentary': 'Mockumentaire',
      'tag.mystery': 'Mystère',
      'tag.adventure': 'Aventure',
      'tag.satire': 'Satire',
      'tag.superhero': 'Super-héros',
      'tag.prequel': 'Préquelle',
      'tag.social': 'Réalisme Social'
    }
  };
  
  // Current language
  let currentLang = 'pt-BR';
  
  // Language detection
  function detectLanguage() {
    const saved = localStorage.getItem('seriesvault_lang');
    if (saved && translations[saved]) {
      return saved;
    }
    const browserLang = navigator.language || 'pt-BR';
    const normalized = browserLang.replace('_', '-');
    if (translations[normalized]) {
      return normalized;
    }
    const baseLang = normalized.split('-')[0];
    for (const key in translations) {
      if (key.startsWith(baseLang)) {
        return key;
      }
    }
    return 'pt-BR';
  }
  
  // Get translation
  function t(key, params = {}) {
    const lang = currentLang;
    let text = translations[lang]?.[key];
    
    if (!text) {
      text = translations['en-US']?.[key];
    }
    
    if (!text) {
      text = key;
    }
    
    for (const [param, value] of Object.entries(params)) {
      text = text.replace(`{{${param}}}`, value);
    }
    
    return text;
  }
  
  // Set language
  function setLanguage(lang) {
    if (!translations[lang]) return;
    currentLang = lang;
    localStorage.setItem('seriesvault_lang', lang);
    document.documentElement.lang = lang.split('-')[0];
    translatePage();
    
    const selector = document.getElementById('languageSelector');
    if (selector) {
      selector.value = lang;
    }
    
    const mobileSelector = document.getElementById('mobileLanguageSelector');
    if (mobileSelector) {
      mobileSelector.value = lang;
    }
    
    window.dispatchEvent(new CustomEvent('languageChanged', { detail: { lang } }));
  }
  
  // Translate all elements with data-i18n attribute
  function translatePage() {
    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      const text = t(key);
      if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
        el.placeholder = text;
      } else {
        el.innerHTML = text;
      }
    });
    
    document.querySelectorAll('.card .tag').forEach(tag => {
      const key = tag.getAttribute('data-tag-key');
      if (key) {
        tag.textContent = t(key);
      }
    });
    
    updateSeriesCount();
    updateRanking();
    
    // Update series count in the grid header
    updateSeriesCountHeader();
  }
  
  // Update series count
  function updateSeriesCount() {
    const countEl = document.querySelector('#seriesCount span');
    if (countEl) {
      const visibleCards = document.querySelectorAll('.card:not([style*="display: none"])');
      const total = visibleCards.length;
      countEl.textContent = total;
    }
  }
  
  // Update series count with translation
  function updateSeriesCountHeader() {
    const seriesCountEl = document.getElementById('seriesCount');
    if (seriesCountEl) {
      const visibleCards = document.querySelectorAll('.card:not([style*="display: none"])');
      const total = visibleCards.length;
      const showingText = t('series.showing');
      seriesCountEl.innerHTML = `${showingText} <span>${total}</span> ${t('hero.series')}`;
    }
  }
  
  // Create language selector
  function createLanguageSelector() {
    const container = document.createElement('div');
    container.className = 'language-selector';
    container.style.cssText = `
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-left: 16px;
    `;
    
    const select = document.createElement('select');
    select.id = 'languageSelector';
    select.style.cssText = `
      background: var(--surface2);
      border: 1px solid var(--border);
      color: var(--text);
      padding: 6px 12px;
      border-radius: var(--radius-sm);
      font-family: 'Inter', sans-serif;
      font-size: 13px;
      cursor: pointer;
      outline: none;
      transition: border-color 0.2s;
    `;
    
    const languages = [
      { value: 'pt-BR', label: '🇧🇷 Português' },
      { value: 'en-US', label: '🇺🇸 English' },
      { value: 'fr-FR', label: '🇫🇷 Français' }
    ];
    
    languages.forEach(lang => {
      const option = document.createElement('option');
      option.value = lang.value;
      option.textContent = lang.label;
      select.appendChild(option);
    });
    
    select.value = currentLang;
    
    select.addEventListener('change', () => {
      setLanguage(select.value);
    });
    
    container.appendChild(select);
    return container;
  }
  
  // Language selector for mobile
  function createMobileLanguageSelector() {
    const container = document.createElement('div');
    container.className = 'mobile-language-selector';
    container.style.cssText = `
      margin-top: 8px;
      padding: 8px 0;
      border-top: 1px solid var(--border);
    `;
    
    const select = document.createElement('select');
    select.id = 'mobileLanguageSelector';
    select.style.cssText = `
      background: var(--surface);
      border: 1px solid var(--border);
      color: var(--text);
      padding: 8px 12px;
      border-radius: var(--radius-sm);
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      cursor: pointer;
      outline: none;
      width: 100%;
    `;
    
    const languages = [
      { value: 'pt-BR', label: '🇧🇷 Português' },
      { value: 'en-US', label: '🇺🇸 English' },
      { value: 'fr-FR', label: '🇫🇷 Français' }
    ];
    
    languages.forEach(lang => {
      const option = document.createElement('option');
      option.value = lang.value;
      option.textContent = lang.label;
      select.appendChild(option);
    });
    
    select.value = currentLang;
    
    select.addEventListener('change', () => {
      setLanguage(select.value);
      const mainSelector = document.getElementById('languageSelector');
      if (mainSelector) mainSelector.value = select.value;
    });
    
    container.appendChild(select);
    return container;
  }
  
  // Add i18n attributes to static elements
  function addI18nAttributes() {
    const mappings = {
      '.hero-badge': 'hero.badge',
      '.hero-title': 'hero.title',
      '.hero-subtitle': 'hero.subtitle',
      '.hero-actions .btn-primary': 'hero.explore',
      '.hero-actions .btn-secondary': 'hero.ranking',
      '.hero-scroll span': 'hero.scroll',
      '.categorias .section-title': 'categories.title',
      '.categorias .section-sub': 'categories.subtitle',
      '.cat-btn[data-cat="todas"]': 'categories.all',
      '.cat-btn[data-cat="drama"]': 'categories.drama',
      '.cat-btn[data-cat="acao"]': 'categories.action',
      '.cat-btn[data-cat="animacao"]': 'categories.animation',
      '.cat-btn[data-cat="anime"]': 'categories.anime',
      '.cat-btn[data-cat="comedia"]': 'categories.comedy',
      '.cat-btn[data-cat="crime"]': 'categories.crime',
      '.cat-btn[data-cat="fantasia"]': 'categories.fantasy',
      '#searchInput': 'search.placeholder',
      '.series-section .section-title': 'series.title',
      '.sobre-text h2': 'about.title',
      '#ranking .section-title': 'ranking.title',
      '#ranking .section-sub': 'ranking.subtitle'
    };
    
    for (const [selector, key] of Object.entries(mappings)) {
      document.querySelectorAll(selector).forEach(el => {
        el.setAttribute('data-i18n', key);
      });
    }
    
    document.querySelectorAll('.tag').forEach(tag => {
      const text = tag.textContent.trim();
      const tagMap = {
        'Crime': 'tag.crime',
        'Drama': 'tag.drama',
        '+18 Violenta': 'tag.action',
        'Animação': 'tag.animation',
        'Comédia': 'tag.comedy',
        'Anime': 'tag.anime',
        'Fantasia': 'tag.fantasy',
        'Sci-Fi': 'tag.sciFi',
        'Surreal': 'tag.surreal',
        'Suspense': 'tag.suspense',
        'Thriller': 'tag.thriller',
        'Ninja': 'tag.ninja',
        'Shonen': 'tag.shonen',
        'Pirata': 'tag.pirate',
        'Steampunk': 'tag.steampunk',
        'Mockumentary': 'tag.mockumentary',
        'Mistério': 'tag.mystery',
        'Aventura': 'tag.adventure',
        'Sátira': 'tag.satire',
        'Super-herói': 'tag.superhero',
        'Prequel': 'tag.prequel',
        'Realismo Social': 'tag.social'
      };
      
      const key = tagMap[text];
      if (key) {
        tag.setAttribute('data-tag-key', key);
      }
    });
  }
  
  // Initialize language system
  function initLanguage() {
    const lang = detectLanguage();
    currentLang = lang;
    localStorage.setItem('seriesvault_lang', lang);
    document.documentElement.lang = lang.split('-')[0];
    
    const nav = document.querySelector('.header .nav');
    if (nav) {
      const selector = createLanguageSelector();
      nav.appendChild(selector);
    }
    
    const mobileNav = document.getElementById('mobileNav');
    if (mobileNav) {
      const mobileSelector = createMobileLanguageSelector();
      mobileNav.appendChild(mobileSelector);
    }
    
    addI18nAttributes();
    translatePage();
  }
  
  // Initialize when DOM is ready
  document.addEventListener('DOMContentLoaded', () => {
    // Override filterSeries to update count with translations
    const originalFilterSeries = window.filterSeries;
    window.filterSeries = function() {
      originalFilterSeries();
      updateSeriesCountHeader();
    };
    
    initLanguage();
    
    const observer = new MutationObserver(() => {
      document.querySelectorAll('[data-i18n]:not([data-translated])').forEach(el => {
        const key = el.getAttribute('data-i18n');
        el.innerHTML = t(key);
        el.setAttribute('data-translated', 'true');
      });
    });
    
    observer.observe(document.body, {
      childList: true,
      subtree: true
    });
  });
  
  // Export for use in other files
  if (typeof module !== 'undefined') {
    module.exports = { t, setLanguage, currentLang, translations };
  }