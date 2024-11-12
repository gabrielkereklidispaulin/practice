    <?php 
    // Properties
    class User {
        private $name;
        private $age; 
        private $city;
        private $hobbies;

        // Constructor
        public function __construct($name, $age, $city, $hobbies = []) {
            $this->name = $name; 
            $this->age = $age;
            $this->city = $city; 
            $this->hobbies = $hobbies; 
        }

        // Method to get a personalized greeting
        public function getGreeting() {
            return "Welcome to your profile, " . $this->name . "!"; 
        }

        // Method to check status
        public function getStatus() {
            return $this->age >= 18 ? "Status: Adult" : "Status Minor";
        }

        // Method to display hobbies
        public function displayHobbies() {
            $output = "<ul>";
            foreach ($this->hobbies as $hobby) {
                $output .= "<li>" . htmlspecialchars($hobby) . "</li>"; 
            }
            $output .= "</ul>";
            return $output;
        }
        public function getName() {
            return $this->name;
        }
    
        public function getAge() {
            return $this->age;
        }
    
        public function getCity() {
            return $this->city;
        }
    }
    ?>