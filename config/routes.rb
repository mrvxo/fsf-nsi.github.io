Rails.application.routes.draw do 
  root :to => "pages#index"

  get '/profil', to:  'users#edit', as: :profil
  patch '/profil', to: 'users#update'

  resources :users, only: [:new, :create, :edit] do 
    member do
      get 'confirm'
    end
  end
end
