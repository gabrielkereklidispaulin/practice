<?php
interface Authenticate
{
    static function authenticate();
}

class User implements Authenticate
{
    protected string $username;
    protected string $email;
    protected bool $isAdmin;

    // Create a constructor for the “User” class that sets username and email properties to $username and $email parameter values and isAdmin property to boolean value false
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->isAdmin = false;
    }

    // Create a public “getUsername” function for the “User” class that returns the set username
    public function getUsername(): string
    {
        return $this->username;
    }

    // Create a public “setEmail” function for the “User” class that takes in a $email parameter value and checks if the email is valid with filter_var() function and if the email is valid set it to the email property and if it is not valid echo “Invalid email format”
    public function setEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalid email format";
        }
    }

    // Create a public “checkIsAdmin” function for the “User” class which returns the isAdmin property value
    public function checkIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    // Add the interface for the “User” class and implement the “Authenticate” interface on “User” and “GuestUser” classes. On “User” the “authenticate” function should echo “User authenticated” and on “GuestUser” “Guest access granted”
    public static function authenticate(): void
    {
        echo "User authenticated";
    }




}



class Admin extends User
{
    private function getUsers()
    {
        return $users = [
            new User("Alice", "Alice@example.com"),
            new User("Bob", "Bob@example.com"),
            new User("Charlie", "Charlie@example.com"),
            new Admin("Anna", "Anna@example.com"),
            new Admin("Gary", "Gary@example.com")
        ];
    }

    // Create a constructor for the “Admin” class that sets the username and email the same way as the “User” class, but sets the isAdmin property to boolean value true
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->isAdmin = true;
    }

    // Create a public “deleteUser” function for the “Admin” class that takes in a $user parameter value and echoes “User <username-here> has been deleted”

    public function deleteUser($user)
    {
        echo "User " . $user->getUsername() . " has been deleted";
    }

    // Create a public “displayUsers” function for the “Admin” class that uses the “getUsers” function to get the user data and then echo each user on separate lines

    public function displayUsers()
    {
        $users = $this->getUsers();
        foreach ($users as $user) {
            echo $user->getUsername() . "</br>";
        }

    }

    public function checkUserRole()
    {

        $users = $this->getUsers();

        foreach ($users as $user) {
            if ($user->isAdmin)
                echo $user->username . " is admin</br>";
            else
                echo $user->username . " is user</br>";
        }
    }
}

// Create a new “GuestUser” class that implements “Authenticate”. The class should have private properties “username” and “isAdmin” which the constructor should set to “Guest” and boolean value false. Create also the “getUsername” and “checkIsAdmin” functions the same way as for the “User” class
class GuestUser implements Authenticate
{


    private $username;
    private $isAdmin;

    public function __construct()
    {
        $this->username = "Guest";
        $this->isAdmin = false;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function checkIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    // Add the interface for the “User” class and implement the “Authenticate” interface on “User” and “GuestUser” classes. On “User” the “authenticate” function should echo “User authenticated” and on “GuestUser” “Guest access granted”
    public static function authenticate(): void
    {
        echo "Guest access granted";
    }


}

?>