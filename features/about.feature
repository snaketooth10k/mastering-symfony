Feature: about page
  In order to see the page contents
  As a user
  I am able to visit about page

  Scenario: Visiting about page
    Given I am on "/about"
    Then I should see "Mava is a web app"

  Scenario: Visiting the about page for an existing user
    Given I am on "/about/tom%20foolery"
    Then I should see "This guy is so goofy"

  Scenario: Visiting the about page for a non-existent user
    Given I am on "/about/larry"
    Then I should see "Not found"