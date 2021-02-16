class PagesController < ApplicationController
  skip_before_action :only_sign_in, only:  [:index]
  def index
  end
end
