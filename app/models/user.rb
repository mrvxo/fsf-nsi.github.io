class User < ApplicationRecord
  has_secure_password
  validates :username, 
    format: {
     with: /\A[a-zA-Z0-9_]{2,20}\z/, 
     message: 'Le pseudonyme doit contenir que des écritures alphanumériques'},
    uniqueness: {case_sensiive: false}
  validates :email,
    format: {
      with: /\A[^@\s]+@([^@.\s]+\.)+[^@.\s]+\z/
    },
    uniqueness: {case_sensitive: false}

end
