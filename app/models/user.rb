class User < ApplicationRecord
  has_secure_token :confirmation_token
  has_secure_token :password
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

  def to_session
    {id: id}
  end

  def generate_password
    self.password = generate_token
    save!
  end

  def generate_token
    SecureRandom.hex(10)
  end

end
