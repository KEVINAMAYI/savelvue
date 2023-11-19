import { describe, it, expect } from 'vitest'

import { mount } from '@vue/test-utils'
import LoginView from '../../views/LoginView.vue'

describe('LoginView', () => {
  it('login renders properly', () => {
    const wrapper = mount(LoginView)
    expect(wrapper.text()).toContain('login')
  })
})
