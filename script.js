
const events = [
    {
        id: 1,
        name: "Painting",
        icon: "fas fa-palette",
        time: "10:00 AM - 12:00 PM",
        coordinator: "Nagaraj Ganachari",
        description: "Express your creativity on canvas. Show your artistic skills and win exciting prizes.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_PAINTING_GROUP_LINK"
    },
    {
        id: 2,
        name: "Singing",
        icon: "fas fa-microphone",
        time: "2:00 PM - 4:00 PM",
        coordinator: "Nagaraj Ganachari",
        description: "Showcase your vocal talent. Solo and group performances welcome.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_SINGING_GROUP_LINK"
    },
    {
        id: 3,
        name: "Gaming - Free Fire",
        icon: "fas fa-gamepad",
        time: "9:00 AM - 1:00 PM",
        coordinator: "Nagaraj Ganachari",
        description: "Battle royale gaming championship. Form your squad and compete for glory.",
        isGaming: true,
        whatsappGroup: "https://chat.whatsapp.com/YOUR_FREEFIRE_GROUP_LINK"
    },
    {
        id: 4,
        name: "Gaming - BGMI",
        icon: "fas fa-gamepad",
        time: "2:00 PM - 6:00 PM",
        coordinator: "Nagaraj Ganachari",
        description: "BGMI tournament with exciting prizes. Show your battle skills.",
        isGaming: true,
        whatsappGroup: "https://chat.whatsapp.com/YOUR_BGMI_GROUP_LINK"
    },
    {
        id: 5,
        name: "Face Painting",
        icon: "fas fa-smile",
        time: "11:00 AM - 1:00 PM",
        coordinator: "Nagaraj Ganachari",
        description: "Transform faces into art. Create amazing designs and patterns.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_FACEPAINTING_GROUP_LINK"
    },
    {
        id: 6,
        name: "Stand-up Comedy",
        icon: "fas fa-laugh",
        time: "5:00 PM - 7:00 PM",
        coordinator: "Shifa Jamadar",
        description: "Make the audience laugh with your jokes and comic timing.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_COMEDY_GROUP_LINK"
    },
    {
        id: 7,
        name: "Dance",
        icon: "fas fa-music",
        time: "3:00 PM - 5:00 PM",
        coordinator: "Shifa Jamadar",
        description: "Dance to the rhythm. Solo, duo, and group performances accepted.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_DANCE_GROUP_LINK"
    },
    {
        id: 8,
        name: "Mehandi",
        icon: "fas fa-hand-sparkles",
        time: "10:00 AM - 2:00 PM",
        coordinator: "Shifa Jamadar",
        description: "Create beautiful henna designs. Traditional and modern patterns welcome.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_MEHANDI_GROUP_LINK"
    },
    {
        id: 9,
        name: "Makeup & Hairstyle",
        icon: "fas fa-spa",
        time: "1:00 PM - 3:00 PM",
        coordinator: "Shifa Jamadar",
        description: "Showcase your styling skills. Create stunning looks and transformations.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_MAKEUP_GROUP_LINK"
    },
    {
        id: 10,
        name: "Rangoli",
        icon: "fas fa-star",
        time: "9:00 AM - 11:00 AM",
        coordinator: "Shifa Jamadar",
        description: "Create colorful rangoli designs. Traditional art with modern creativity.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_RANGOLI_GROUP_LINK"
    },
    {
        id: 11,
        name: "Quiz",
        icon: "fas fa-brain",
        time: "11:00 AM - 1:00 PM",
        coordinator: "Vanishri Tavagad",
        description: "Test your knowledge across various topics. Individual and team rounds.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_QUIZ_GROUP_LINK"
    },
    {
        id: 12,
        name: "Fashion Show",
        icon: "fas fa-user-tie",
        time: "6:00 PM - 8:00 PM",
        coordinator: "Vanishri Tavagad",
        description: "Walk the ramp with style and confidence. Show your fashion sense.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_FASHION_GROUP_LINK"
    },
    {
        id: 13,
        name: "Photography",
        icon: "fas fa-camera",
        time: "10:00 AM - 5:00 PM",
        coordinator: "Vanishri Tavagad",
        description: "Capture moments through your lens. Submit your best shots on given themes.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_PHOTOGRAPHY_GROUP_LINK"
    },
    {
        id: 14,
        name: "Essay Writing",
        icon: "fas fa-pen-fancy",
        time: "1:00 PM - 3:00 PM",
        coordinator: "Vanishri Tavagad",
        description: "Express your thoughts in words. Creative and analytical writing welcome.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_ESSAY_GROUP_LINK"
    },
    {
        id: 15,
        name: "Street Play",
        icon: "fas fa-theater-masks",
        time: "4:00 PM - 6:00 PM",
        coordinator: "Vanishri Tavagad",
        description: "Perform thought-provoking street plays. Social themes and entertainment.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_STREETPLAY_GROUP_LINK"
    },
    {
        id: 16,
        name: "Debate",
        icon: "fas fa-comments",
        time: "2:00 PM - 4:00 PM",
        coordinator: "Sushmita Kamatagi",
        description: "Showcase your oratory skills. Argue your point with logic and facts.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_DEBATE_GROUP_LINK"
    },
    {
        id: 17,
        name: "Collage Making",
        icon: "fas fa-cut",
        time: "11:00 AM - 1:00 PM",
        coordinator: "Sushmita Kamatagi",
        description: "Create artistic collages from various materials. Let your creativity flow.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_COLLAGE_GROUP_LINK"
    },
    {
        id: 18,
        name: "Best Out Of Waste",
        icon: "fas fa-recycle",
        time: "10:00 AM - 12:00 PM",
        coordinator: "Sushmita Kamatagi",
        description: "Create something useful from waste materials. Sustainability meets creativity.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_WASTE_GROUP_LINK"
    },
    {
        id: 19,
        name: "Video Making",
        icon: "fas fa-video",
        time: "9:00 AM - 5:00 PM",
        coordinator: "Sushmita Kamatagi",
        description: "Create short films or videos on given themes. Editing skills required.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_VIDEO_GROUP_LINK"
    },
    {
        id: 20,
        name: "Meme Making",
        icon: "fas fa-images",
        time: "3:00 PM - 5:00 PM",
        coordinator: "Sushmita Kamatagi",
        description: "Create hilarious and creative memes. Make the internet laugh.",
        whatsappGroup: "https://chat.whatsapp.com/YOUR_MEME_GROUP_LINK"
    }
];

let currentEventWhatsApp = "";

// Initialize the website
document.addEventListener('DOMContentLoaded', function() {
    loadEvents();
    initializeSlider();
    setupMobileMenu();
    setupModal();
    setupFormHandling();
    setupSmoothScroll();
});

// Load all events
function loadEvents() {
    const eventsGrid = document.getElementById('eventsGrid');
    
    events.forEach(event => {
        const card = document.createElement('div');
        card.className = 'event-card';
        card.innerHTML = `
            <div class="event-icon">
                <i class="${event.icon}"></i>
            </div>
            <h3>${event.name}</h3>
            <div class="event-time">
                <i class="far fa-clock"></i>
                <span>${event.time}</span>
            </div>
            <div class="event-coordinator">
                <i class="fas fa-user"></i>
                <span>${event.coordinator}</span>
            </div>
            <p>${event.description}</p>
            <button class="register-btn" onclick="openRegistrationModal('${event.name}', ${event.isGaming || false}, '${event.whatsappGroup}')">
                <span>Register Now</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        `;
        eventsGrid.appendChild(card);
    });
}

// Open registration modal
function openRegistrationModal(eventName, isGaming, whatsappLink) {
    const modal = document.getElementById('registrationModal');
    const modalTitle = document.getElementById('modalTitle');
    const selectedEventInput = document.getElementById('selectedEvent');
    const gamingTypeGroup = document.getElementById('gamingTypeGroup');
    
    modalTitle.textContent = `Register for ${eventName}`;
    selectedEventInput.value = eventName;
    currentEventWhatsApp = whatsappLink;
    
    if (isGaming) {
        gamingTypeGroup.style.display = 'block';
        document.getElementById('gamingType').required = true;
    } else {
        gamingTypeGroup.style.display = 'none';
        document.getElementById('gamingType').required = false;
    }
    
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

// Setup modal
function setupModal() {
    const modal = document.getElementById('registrationModal');
    const closeBtn = document.querySelectorAll('.close-modal');
    
    closeBtn.forEach(btn => {
        btn.onclick = function() {
            closeModal();
        }
    });
    
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }
    
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
        }
    });
}

// Close modal
function closeModal() {
    const modal = document.getElementById('registrationModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('registrationForm').reset();
    document.getElementById('gamingTypeGroup').style.display = 'none';
    document.getElementById('teamMembersGroup').style.display = 'none';
}

// Close success modal
function closeSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Form handling
function setupFormHandling() {
    const form = document.getElementById('registrationForm');
    const teamSizeSelect = document.getElementById('teamSize');
    const teamMembersGroup = document.getElementById('teamMembersGroup');

    teamSizeSelect.addEventListener('change', function() {
        if (this.value === 'team') {
            teamMembersGroup.style.display = 'block';
        } else {
            teamMembersGroup.style.display = 'none';
        }
    });

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        
        try {
            const response = await fetch('backend/register.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                closeModal();
                showSuccessModal(formData.get('full_name'), formData.get('event_name'));
            } else {
                alert('Registration failed: ' + result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Registration failed. Please try again.');
        }
    });
}

// Show success modal
function showSuccessModal(name, eventName) {
    const successModal = document.getElementById('successModal');
    const successMessage = document.getElementById('successMessage');
    const whatsappBtn = document.getElementById('whatsappJoinBtn');
    
    successMessage.textContent = `Thank you ${name}! Your registration for "${eventName}" has been received successfully. We'll contact you soon.`;
    
    whatsappBtn.onclick = function() {
        window.open(currentEventWhatsApp, '_blank');
    };
    
    successModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

// Slider functionality
function initializeSlider() {
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.slider-btn.prev');
    const nextBtn = document.querySelector('.slider-btn.next');
    const dotsContainer = document.querySelector('.slider-dots');
    let currentSlide = 0;
    let slideInterval;

    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.className = index === 0 ? 'dot active' : 'dot';
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.dot');

    function goToSlide(n) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function startSlideShow() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function stopSlideShow() {
        clearInterval(slideInterval);
    }

    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopSlideShow();
        startSlideShow();
    });

    nextBtn.addEventListener('click', () => {
        nextSlide();
        stopSlideShow();
        startSlideShow();
    });

    startSlideShow();
    document.querySelector('.slider-container').addEventListener('mouseenter', stopSlideShow);
    document.querySelector('.slider-container').addEventListener('mouseleave', startSlideShow);
}

// Mobile menu
function setupMobileMenu() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });

    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    });
}

// Smooth scroll
function setupSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 70;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.boxShadow = '0 5px 20px rgba(0,0,0,0.15)';
    } else {
        navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
    }
    
});