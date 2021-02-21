class UserMailer < ApplicationMailer
  default from: 'qtzctl@example.com'
  def confirm(user)
    @user = user
    mail(to: user.email, subject: '[' + Rails.application.config.site[:name] + '] - Confirmation' )
  end

  def password(user)
    @user = user
    mail(to: @user[:email], subject: '[' + Rails.application.config.site[:name] + '] - Votre mot de passe' )
  end

end
