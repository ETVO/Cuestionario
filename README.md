# 📊 Cuestionario - Professional Competencies Survey Platform

A comprehensive web-based survey platform built for doctoral research at the Universidad de Barcelona, collecting data on volleyball coaches' professional competencies with custom data visualization and analysis tools.

**Research Project:** Doctorado en Actividad Física, Educación Física y Deporte  
**Institution:** Facultad de Educación – Universidad de Barcelona  
**Principal Investigator:** Martina Kieling S. B. Rolim

## 🎯 Overview

This was my first professional project, built to support academic research in sports education. The platform enables volleyball coaches to complete a detailed competency assessment survey, stores responses in a MySQL database, and generates personalized visual feedback using custom p5.js graphics. While building this, I was learning and refining many web development concepts, which makes it a valuable showcase of problem-solving and technical growth.

Martina is my aunt, and I'm deeply grateful she entrusted me with contributing to her doctoral research. This project was an invaluable opportunity to apply my growing technical skills to meaningful academic work.

## ✨ Key Features

- **Multi-Page Survey System** - Guided questionnaire with 42 core competency questions across 7 categories
- **Session Management** - Secure response tracking with password authentication
- **Progress Persistence** - Auto-save functionality prevents data loss (Sisyphus.js)
- **Custom Data Visualization** - Interactive radar charts and competency graphs using p5.js
- **Database Integration** - MySQL storage with comprehensive data collection
- **Admin Dashboard** - Secure backend for managing responses and viewing analytics
- **CSV Export** - Data export functionality for statistical analysis
- **Responsive Design** - Mobile-friendly interface for coaches on any device
- **Informed Consent** - Built-in consent documentation and participant information

## 🎨 Visual Analytics

The platform generates personalized competency visualizations:
- **Radar Charts** - Seven-point competency radar showing self-assessment vs. perceived importance
- **Category Analysis** - Individual breakdowns of each competency domain:
  - I. Competencias Deportivas (Sports Competencies)
  - II. Competencias Técnico-Tácticas (Technical-Tactical)
  - III. Competencias Pedagógicas (Pedagogical)
  - IV. Competencias Personales (Personal)
  - V. Competencias Sociales (Social)
  - VI. Competencias Éticas (Ethical)
  - VII. Competencias de Gestión (Management)

Visualizations are dynamically generated based on survey responses, providing immediate feedback to participants.

## 🛠️ Tech Stack

- **Backend:** PHP (native, no frameworks)
- **Database:** MySQL
- **Frontend:** HTML5, CSS3, JavaScript
- **Visualization:** p5.js for custom graphics
- **Libraries:**
  - jQuery for DOM manipulation
  - (Sisyphus.js)[https://github.com/simsalabim/sisyphus] for form data persistence
  - SweetAlert for user notifications
  - PHPMailer for email functionality
  - Bootstrap (admin panel)

## 📊 Data Collection Structure

### Survey Components
- **Demographic Information** - Coaching level, experience, certifications
- **Competency Assessment** - Dual rating system:
  - Self-evaluation (current competency level)
  - Importance rating (perceived necessity)
- **Professional Context** - 8 categories of professional background
- **Additional Data** - Optional comments and feedback

### Response Processing
- Automatic averaging across competency domains
- Category-level aggregation for visualization
- Timestamp tracking (start/finish times)
- Unique response IDs for retrieval

## 🔐 Admin Features

Secure administrative interface includes:
- **Response Management** - View, filter, and manage survey submissions
- **Data Export** - CSV downloads for external analysis
- **Visualization Retrieval** - Generate graphs for any response by ID or email
- **General Statistics** - Overview of participation and completion rates
- **Authentication** - Password-protected access to sensitive data

## 🚀 Running This Project

### Prerequisites

- PHP 7.4+
- MySQL 5.7+
- Apache/Nginx web server
- Modern web browser with JavaScript enabled

### Installation

```bash
# Clone the repository
git clone https://github.com/ETVO/cuestionario.git
cd cuestionario

# Configure database connection
# Edit config/connect.php with your MySQL credentials

# Import database schema
# Run the SQL file in model/database/

# Set up web server to point to project root

# Access the application
# http://yourdomain.com/
```

### Database Setup

1. Create a MySQL database
2. Import the schema from `/model/database/`
3. Update connection credentials in `/config/connect.php`
4. Set appropriate permissions for data tables

## 📁 Project Structure

```
cuestionario/
├── cuestionario/          # Main survey pages
│   ├── index.php         # Multi-page questionnaire
│   ├── dbsave.php        # Database submission handler
│   └── consentimento_informado.pdf
├── grafico/              # Visualization pages
│   ├── index.php         # Graph generation interface
│   └── new.php           # Alternative visualization
├── backadm/              # Admin panel
│   ├── index.php         # Admin dashboard
│   ├── pages/            # Admin page modules
│   └── export_csv/       # CSV export scripts
├── js/
│   ├── grafico1.js       # p5.js radar chart
│   ├── grafico2.js       # p5.js alternative visualization
│   ├── cuestionario.js   # Survey logic
│   └── libraries/        # Third-party libraries
├── model/
│   ├── mysql.php         # Database connection
│   ├── util.php          # Utility functions
│   └── database/         # SQL schemas
├── config/               # Configuration files
└── util/                 # Helper utilities
```

## 🎓 Learning Outcomes

This project served as an intensive learning experience in:

- **Database Design** - Structuring complex survey data with proper normalization
- **Session Management** - Implementing secure multi-page form workflows
- **Data Visualization** - Creating custom graphics with p5.js canvas manipulation
- **User Experience** - Balancing data collection needs with participant ease of use
- **Security** - Implementing authentication and data protection measures
- **Client Communication** - Translating academic research needs into technical requirements

Building a production system for academic research taught me the importance of data integrity, user-friendly interfaces, and robust error handling—skills that have been foundational throughout my career.

## 📊 Research Impact

This platform successfully collected data from volleyball coaches across Spain, contributing to doctoral research on professional competency development in sports education. The combination of quantitative ratings and visual feedback provided valuable insights for both researchers and participants.

**Published Research:** The completed doctoral thesis resulting from this research is available at [Dipòsit Digital de la Universitat de Barcelona](https://diposit.ub.edu/items/a125ea8b-d230-4942-af4b-148cbd63acf9).

## 🔒 Data Privacy

The platform implements several privacy measures:
- Secure session-based authentication
- Optional anonymized responses
- Informed consent documentation
- Restricted admin access
- No personally identifiable information in visualizations

## 👤 Author

**Estevão Pereira Rolim** - [@ETVO](https://github.com/ETVO) | [LinkedIn](https://linkedin.com/in/estevao-p-rolim)

Full Stack Developer | 8 years of experience

This project represents the beginning of my professional journey, built while learning core web development principles that continue to inform my work today.

---

*Developed for academic research at Universidad de Barcelona. Built with PHP, MySQL, and p5.js.*

*README created in collaboration with Claude AI.*
