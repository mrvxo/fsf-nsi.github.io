class UserMailer < ApplicationMailer
  def confirm(user)
    @user = user
    mail(to: user.email, subject: '[' + Rails.application.config.site[:name] + '] - Confirmation' )
  end
end
